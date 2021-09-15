
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];

$to = 'xpointersite@outlook.com'; 
$subject = mb_encode_mimeheader('CLIENTE DO SITE'); 

$headers .= "$From design@guilhermedouglas.com \r\n"; 		

$headers .= "$name \r\n";
$headers .= "$tel \r\n";
$headers .= "$email \r\n";
$headers .= "$select \r\n";


if ($name == "" || $tel == "" || $select == "" || $msg == "" || $email == "" ){

 echo "<script>alert('$name : Nenhum campo pode ficar em branco.');</script>";

    echo "<script>history.go(-1);</script>";
    
 }else{
     (mail($to, $subject, $msg, $headers)); 
echo "<script>alert('{$name} : E-MAIL ENVIADO COM SUCESSO! Em breve responderemos ao seu e-mail. Seu webmaster lhe agradece... OBRIGADO!');document.location='index.php';</script>";

}


?>
