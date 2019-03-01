<?php
 
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$from = 'De: InfoStella';
$to = 'marx_god@hotmail.com';
$subject = 'InsfoStella';
 
$body = "De: $nome\n Empresa: $empresa\n E-Mail: $email\n Telefone: $telefone\n Mensagem:\n $mensagem";
 
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Sua mensagem foi enviada!</p>';
    } else { 
        echo '<p>Aconteceu algo errado, tente novamente!</p>'; 
    }
}

?>
