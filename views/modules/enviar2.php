<?php
$name =$_POST['name'];
$mail =$_POST['mail'];
$phone =$_POST['phone'];
$message =$_POST['message'];

$header= 'From: ' . $mail . " \r\n";
$header.= "X-Mailer: PHP/ " . phpversion() . " \r\n";
$header.= "Mime-Version: 1.0 \r\n";
$header.= "Content-Type: text/plain";

$mensaje="Este mensaje fue enviado por : " .$name . ",\r\n";
$mensaje.="Su e-mail es : " .$mail . ",\r\n";
$mensaje.="Su número de teléfono es : " .$phone . ",\r\n";
$mensaje.="Mensaje : " .$message . ",\r\n";
$mensaje.="Enviado el : " .$date('d/m/Y', time());

$para = 'yoesmarloza@gmail.com';
$asunto='Asunto de mail recibido';

mail($para, $asunto, utf8_decode($mensaje),$header);

echo "<script>
        Swal.fire(
            'Mensaje Enviado!',
            '',
            'success'
            )

        $(document).ready(function(){
            $('#name').val("");
            $('#mail').val("");
            $('#phone').val("");
            $('#message').val("");
        }
    </script>";
?>