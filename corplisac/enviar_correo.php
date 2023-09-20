<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$destinatario = "corplisacventas@corplisac.com.pe";
$asunto = "Correo || Corplisac.com"; 
$cuerpo = '
    <html>         
        <body> 
            <h1>Solicitud de contacto</h1>
            <p> 
                Contacto:  '.$nombre . ' <br>
                Correo: '.$correo.' <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 
$headers .= "FROM: $nombre <$correo>\r\n";

if(mail($destinatario,$asunto,$cuerpo,$headers)){
    echo '<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/js/alertify.min.js"></script>';
    echo '<script> alertify.success("Correo enviado"); </script>';
} else {
    echo '<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/js/alertify.min.js"></script>';
    echo '<script> alertify.error("Error al enviar el correo"); </script>';
}
?>
