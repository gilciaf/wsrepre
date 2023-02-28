<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find your dream car!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $fone = $_POST['fone'];
   $message = $_POST['message'];
   echo "chegou aqui!";
   //https://github.com/PHPMailer/PHPMailer
   $arquivo = "   
   Cliente: ".$nome."
   Email:".$email."
   Fone:".$fone."
   Mensagem:".$message."
   Data: ".$data_envio;  

  //enviar
  
require 'PHPMailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP();

$mailer->Port = 587; 

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

echo "<div class='mens_cont'><h3> Mr. " . $nome . "Obrigado por sua mensagem, entraremos em contato em breve.</h3></div>";

if (!$mailer->Send()) {
	echo "Mensagem nao enviada com susesso";
	echo "Erro: " . $mailer->ErrorInfo;exit;
} else {
	echo "<div class='mens_cont'><h3> Seu email Foi enviado com sucesso!</h3></div>";
}
?>   

<a id="volta" href="https://wsepi.com.br/contato">Voltar</a>
<footer>
   WS Representações
</footer>

</body>

</html>