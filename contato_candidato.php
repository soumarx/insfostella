<?php
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$from = 'De: InfoStella';
$to = 'marx_god@hotmail.com';
$subject = 'InsfoStella';
 
$body = "De: $nome\n  E-Mail: $email\n Telefone: $telefone\n Curriculo:\n $mensagem";
 
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Sua mensagem foi enviada!</p>';
    } else { 
        echo '<p>Aconteceu algo errado, tente novamente!</p>'; 
    }
}

?>
