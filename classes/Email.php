<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
class Email {
    public $nombre;
    public $email;
    public $token;

    public function __construct($nombre, $email, $token) {
        $this->nombre = $nombre;
        $this->nombre = $email;
        $this->nombre = $token;
    }

    public function enviarConfirmacion() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e746540bf3f503';
        $mail->Password = 'd603af7d35831c';

        $mail->setFrom('cuentas@mictli.com');
        $mail->addAddress('cuentas@mictli.com', 'MictliGatita.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> has creado tu cuenta en Mictli Gatita Pikachita, solo debes confirmarla ingresando en el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=". $this->token . "'>Confirmar cuenta</a> </p>";
        $contenido .= "<p>Si tú no solicistaste una cuenta en Mictli Gatita Pikachita, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
    }

    public function enviarInstrucciones() {
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e746540bf3f503';
        $mail->Password = 'd603af7d35831c';

        $mail->setFrom('cuentas@mictli.com');
        $mail->addAddress('cuentas@mictli.com', 'MictliGatita.com');
        $mail->Subject = 'Reestablece tu contraseña';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu contraseña, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=". $this->token . "'>Reestablecer contraseña</a> </p>";
        $contenido .= "<p>Si tú no solicistaste una cuenta en Mictli Gatita Pikachita, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
    }
}