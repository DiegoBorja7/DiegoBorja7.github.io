<?php
    use PHPMailer\srs\PHPMailer;
    use PHPMailer\srs\Exception;

    require 'vendor/autoload.php';

    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
    $mensage="Latitud: "+$latitude+"\nLongitud:"+$longitude;

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;  
    $mail->SMTPSecure = 'tls';    
    $mail->Host = 'smtp1.gmail.com;';
    $mail->Port = 465;
    $mail->Username = 'dyegho.7@gmail.com';                 
    $mail->Password = 'desconocido';                      
    $mail->setFrom('cuenta-de-correo@gmail.com', 'Mailer');
    $mail->addAddress("desconocido", "unknown name");  
    $mail->Subject = 'Coordenadas';
    $mail->Body= $mensage;
    $mail->send();
    $mail->ErrorInfo;

    /*$destination="diego_anddy95@hotmail.com";
    $subject="Coordenadas"
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
    $menssage="Latitud: "+$latitude+"\nLongitud:"+$longitude;
    mail($destination,$subject,$menssage);
    echo("mensaje enviado");*/
?> 