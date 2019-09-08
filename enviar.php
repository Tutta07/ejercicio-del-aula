<?php

$conexion=mysqli_connect("localhost","root","","bd_tutta");
if(!$conexion){
    echo'Error al conectarnos a la base de datos';
}
else{
    echo'Conectado a la base de datos';
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php'; /*para llamar a la libreria*/

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'baronelismy@gmail.com';                     // SMTP username
    $mail->Password   = 'gloria*2017';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('baronelismy@gmail.com', 'Nelismy');
    $mail->addAddress('juliuscespedes7777@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto importante';
    $mail->Body    = 'hola este es un correo de prueba';
  

    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un erroral enviar el mensaje: {$mail->ErrorInfo}";
}







$destino="baronelismy@gmail.com";  /* se crea variable que almacenara el correo al cual se enviaran los datos del contacto*/
$nome=$_POST["Nome"];/*Se crea una variable para guardar lo que se recoge del input */ 
$email=$_POST["Email"];
$telefone=$_POST["Telefone"];
$mensaje=$_POST["Mensagem"];
$conteudo="Nome: " . $nome ."\nEmail: " . $email ."\nTelefone: " . "\nMensagem: " . $mensaje; /*Unir todas las variables en una sola concatenandola*/
mail($destino,"Contato",$conteudo);/*Para enviar e correo con la funcion mail*/
header("Location: Obrigado(a).html");/*Redireccionamos al usuario a otra pagina*/
?>