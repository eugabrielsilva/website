<?php
    // Token
    session_start();
    $token = $_SESSION['token'] ?? '';
    if(empty($_POST['token']) || $_POST['token'] !== $token){
        header('Location: ./');
    }

    // Dependências
    $config = require('lib/Config.php');
    require('lib/Exception.php');
    require('lib/PHPMailer.php');
    require('lib/SMTP.php');

    // Dados
    if(!empty($_POST['nome']) && !empty($_POST['email'])){
        // Valida dados
        $nome = trim($_POST['nome']);
        $email = trim(strtolower($_POST['email']));
        $telefone = trim($_POST['telefone'] ?? '');
        $mensagem = trim($_POST['nome'] ?? '');

        // Monta mensagem
        $texto = "<h3>Contato Site</h3><br>
                    <strong>Nome:</strong> {$nome}<br>
                    <strong>E-mail:</strong> {$email}<br>
                    <strong>Telefone:</strong> {$telefone}<br>
                    <strong>Mensagem:</strong><br>
                    {$mensagem}";

        // Envia e-mail
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = $config['host'];
        $mail->Username = $config['user'];
        $mail->Password = $config['password'];
        $mail->Port = $config['port'];
        $mail->setFrom($config['user'], 'Gabriel Silva');
        $mail->addAddress('contato@eugabrielsilva.tk', 'Gabriel Silva');
        $mail->isHTML();
        $mail->Subject = 'Contato Site | ' . $_POST['nome'];
        $mail->Body = $texto;
        $result = $mail->send();

        // Retorna resultado
        header('Content-Type: application/json');
        echo json_encode(['status' => $result]);
    }else{
        header('Location: ./');
    }
?>