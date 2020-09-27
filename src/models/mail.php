<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// TODO: create class for verifying and sending email
class Mail {
    private $mail_config;
    public $recipient;

    function __construct($recipient) {
        // get server configuration settings
        $config = new Configuration();
        $this->mail_config = $config->getMailConfig();

        // set recipient
        $this->recipient = $recipient;
    }

    public function send($sender_name, $sender_email, $content) {
        // passing true enables exceptions
        $mail = new PHPMailer(true);
        try {
            // Server Settings
            $mail->isSMTP();
            $mail->Host = $this->mail_config['hostname'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->mail_config['username'];
            $mail->Password = $this->mail_config['password'];
            $mail->SMTPSecure = 'ssl';
            $mail->Port = $this->mail_config['port'];

            // Recipient
            $mail->setFrom($this->recipient, 'mate - Website Kontaktformular');
            $mail->addAddress($this->recipient);
            $mail->addReplyTo($sender_email, $sender_name);

            // Content
            $mail->Subject = substr($content, 0, 40);
            $mail->CharSet = 'utf-8';
            $mail->body = $content;

            // Send
            $mail->send();
        } catch (Exception $e) {
            error_log($mail->errorInfo);
        }
    }
    
}

?>