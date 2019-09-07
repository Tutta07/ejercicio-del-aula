<?php
$destino="baronelismy@gmail.com";  /* se crea variable que almacenara el correo al cual se enviaran los datos del contacto*/
$nome=$_POST["Nome"];/*Se crea una variable para guardar lo que se recoge del input */ 
$email=$_POST["Email"];
$telefone=$_POST["Telefone"];
$mensaje=$_POST["Mensagem"];
$conteudo="Nome: " . $nome ."\nEmail: " . $email ."\nTelefone: " . "\nMensagem: " . $mensaje; /*Unir todas las variables en una sola concatenandola*/
mail($destino,"Contato",$conteudo);/*Para enviar e correo con la funcion mail*/
header("Location: Obrigado(a).html");/*Redireccionamos al usuario a otra pagina*/








?>