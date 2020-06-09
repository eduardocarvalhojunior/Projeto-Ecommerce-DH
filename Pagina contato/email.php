<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "contato@ ...nome do site... .com.br";
$subject = "contato - Loja Virtual ";
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Mensagem:".$mensagem;
$header = "From:contato@ ...nome do site ... .com.br"."\r\n".
         "Reply-To:".$email."\e\n".
         "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}

else {
    echo("O Email mão pode ser enviado");
}





}
?>