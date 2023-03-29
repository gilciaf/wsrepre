<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>WS Representações!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
        padding:4%;
    }
    .mens_cont{
        padding:4%;
        border: solid 1px grey;
        border-radius: 7px;
    }
    </style>
</head>
<body>
<?php
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $fone = $_POST['fone'];
   $message = $_POST['message'];
   $arquivo = "   
   Cliente: ".$nome."
   Email:".$email."
   Fone:".$fone."
   Mensagem:".$message.";


  //enviar
  
require 'PHPMailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP();

$mailer->Port = 465;

$mailer->Host = 'mail.wsepi.com.br';
$mailer->SMTPSecure = 'tls';
$mailer->SMTPAuth = true;
$mailer->SMTPAuth = true; 
$mailer->Username = 'site@wsepi.com.br'; 
$mailer->Password = 'Wsepi@2202';
$mailer->From = 'site@wsepi.com.br';
$mailer->AddAddress('contato@wsepi.com.br');
$mailer->Subject = 'Contato via site - ' . date("H:i") . '-' . date("d/m/Y");
$mailer->IsHTML(true); 
$mailer->Body = $arquivo;

echo "<div class='mens_cont'><h3> Sr. " . $nome . "Obrigado por sua mensagem, entraremos em contato em breve.</h3></div>";

if (!$mailer->Send()) {
	echo "<div class='mens_cont'><h3>Mensagem nao enviada com sucesso</h3></div>";
	echo "Erro: " . $mailer->ErrorInfo;exit;
} else {
	echo "<div class='mens_cont'><h3> Seu email Foi enviado com sucesso!</h3></div>";
}
?>   

<a id="volta" href="https://wsepi.com.br/contato">Voltar</a>
<footer>
   <h4>WS Representações</h4>
</footer>

</body>

</html>