<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

function envia_email($para, $assunto, $mensagem){

    //Cria uma instância da classe PHPMailer; o parâmetro true habilita as exceções
    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita a saída de debug (para fase de testes)
        $mail->isSMTP();                                            //Define o envio por meio do SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Define o servidor SMTP utilizado para o envio
        $mail->SMTPAuth   = true;                                   //Habilita a autenticação do SMTP
        $mail->Username   = 'pitchau0@gmail.com';                   //usuário SMTP
        $mail->Password   = 'uevvgbkzppnrhvrt';                     //senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilita a encriptação implícita TLS
        $mail->Port       = 465;                                    //Porta TCP de conexão; use 587 se você tiver configurado SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
        

        //Remetente e Destinatários
        $mail->setFrom('pitchau0@gmail.com', 'Pitchau inc');    // Adiciona o remetente
        $mail->addAddress($para);                               // Adiciona um destinatário

        //Conteúdo
        $mail->isHTML(true);                                    //Formata o e-mail com HTML
        $mail->Subject = $assunto;                              //Assunto do e-mail
        $mail->Body = $mensagem;                                // Corpo do e-mail

        $mail->send();                                          // tenta enviar o e-mail
        return true;                                            // retorna verdadeiro se enviar corretamente.
    } catch (Exception $e) {
        echo "Erro: ".$e;
        return false;                                           // retorna falso se ocorrer uma falha no envio.
    }
}

?>
