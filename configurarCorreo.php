<?php
//      Importante!
// 1) entrar a la cuenta Gmail que enviará los correos y copiar y abrir esta dirección en el navegador--->    https://www.google.com/settings/security/lesssecureapps
// 2)dar en la opción "activar"

//      Favor de llenar los campos como se indica...
//email envio es la cuenta de gmail que se utilizará para enviar los correos (así nos quitamos de problemas con la configuracion del servidor php ini)
//email recibido es la cuenta que recibirá los correos
//pass  es la contraseña del correo que envía
//asunto es el asunto que aparecerá en tu bandeja de entrada de correo
//msg en html es el contenido del correo que se envía
// los datos extraidos del formulario son Nombre = $name, Correo = $email , Mensaje = $message y el punto se utiliza para concatenar y el texto escrito va entre comillas,

    //ejemplo: $msg = .name." Tiene como dirección de correo: ".$email." y dejó un mensaje: ".$message;
            // Estó enviaría un correo que dirá (por ejemplo) "Ruffles Tiene como dirección de correo: l.salvador.arreola@gmail.com y dejó un mensaje: Hola Gente que usa mi script!"

    //nota1: la dirección que envía debe ser de gmail --- nota2: tanto dirección de envio como recibido pueden ser las mismas si son de gmail.

$nombreEmpresa = "Web ejemplo";
$emailEnvio = "cuentaQueEnvia@gmail.com";
$emailRecibido = "cuentaQueRecibe@loquesea.com";
$pass = "cambiarPorPassword";
$asunto="Correo enviado desde ".$nombreEmpresa." por ".$name;
$msg = "<p><b><font color='#31c27a'>Nombre:</font></b> ".$name."</p><p><b><font color='#31c27a'>Correo: </font></b>".$email."</p><p><b>
    <font color='#31c27a'>Mensaje: </font></b> ".$message."</p><p><font color='#b2b2b2'>--Mensaje enviado desde el formulario de contacto de
    ".$nombreEmpresa."--Made by Ruffles xD</font></p>";
?>
