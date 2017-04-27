<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once'PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
// Pedir saída de depuração compatível com HTML
$mail -> Debugoutput= 'html';
//
$mail->Host = 'smtp.gmail.com';
//

$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = "seu_email_para_enviar_email_para_site";
$mail->Password = "senha_do_email";

//quem esta enviando o email

$mail->setFrom("seu_email_para_enviar_email_para_site","Alura Curso PHP e MySQL"); //modificar para endereço e nome

//quem vai receber o email
$mail->addAddress('seu_email');      
//titulo da mensagem
$mail->Subject = 'Email de contato da loja';
//corpo da mensagem
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");      

//se usuario não abrir em html e sim em txt 
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

//enviando o email
if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();