<?php
    // Token
    session_start();
    $token = $_SESSION['token'] ?? "";
    if(empty($_POST['token']) || $_POST['token'] !== $token){
        header('Location: ./');
    }

    // Dados
    if(!empty($_POST['nome']) && !empty($_POST['email'])){
        // Valida dados
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone'] ?? "");
        $mensagem = trim($_POST['nome'] ?? "");

        // Monta mensagem
        $texto = "<h3>Contato Site</h3><br>
                    <b>Nome:</b> {$nome}<br>
                    <b>E-mail:</b> {$email}<br>
                    <b>Telefone:</b> {$telefone}<br>
                    <b>Mensagem:</b><br>
                    {$mensagem}";

        // Envia e-mail
        $version = phpversion();
        $headers = "From: {$nome} <{$email}>\n";
        $headers .= "X-Mailer: PHP/{$version}\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-Type: text/html; charset=utf-8\n";
        $result = mail('contato@eugabrielsilva.tk', 'Contato Site', $texto, $headers);

        // Retorna resultado
        header('Content-Type: application/json');
        echo json_encode(['status' => $result]);
    }else{
        header('Location: ./');
    }
?>