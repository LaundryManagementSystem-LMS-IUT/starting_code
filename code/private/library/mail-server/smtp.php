<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../Database/connector/config.php';
require 'vendor/autoload.php';

class Email{
    private $email_address;
    private $email_body;
    private $email_subject;

    public function __construct($email_address,$email_body,$email_subject){
        $this->email_address = $email_address;
        $this->email_body = $email_body;
        $this->email_subject = $email_subject;
    }

    public function get_email_body(){
        return $this->email_body;
    }

    public function get_email_address(){
        return $this->email_address;
    }

    public function get_subject_body(){
        return $this->email_subject;
    }
}

class SMTPLaunch{
    private $error_message;
    private $mail;

    public function __construct($emailContent){
        $mail = new PHPMailer(true);
        $this->mail=$mail;
        $this->setMail();
        $this->prepareMail($emailContent);
    }

    private function setMail(){
        $this->mail->isSMTP();
        $database->fetch_results($credentials,"SELECT * FROM smtp");
        $this->mail->Host =$credentials['host'];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $credentials['username'];
        $this->mail->Password = $credentials['password'];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = $credentials['port'];
        unset($MailServer);
    }

    private function prepareMail($email){
        
        $this->mail->setFrom($this->mail->Username, 'Washify');
        $this->mail->addAddress('' . $email->get_email_address() . '');
        $this->mail->isHTML(true);
        $this->mail->Subject = $email->get_subject_body();
        $this->mail->Body = $email->get_email_body();
        $this->mail->AltBody = $email->get_email_body();
        
    }

    public function sendMail(){
        try{
            $this->mail->send();
        }
        catch(Exception $e){
            $this->error_message= "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
            return $this->error_message;
        }
        $this->error_message="An Email Has Been Sent, Check Your Registered Email Address. If you didn't receive the email within 5 minutes, Try Again";
        return $this->error_message;
    }

    public function send(&$error){
        try{
            $this->mail->send();
        }
        catch(Exception $e){
            $error= "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
            return false;
        }
        $error="An Email Has Been Sent, Check Your Registered Email Address. If you didn't receive the email within 5 minutes, Try Again";
        return true;
    }

    public function set_error_message($error_message){
        $this->error_message = $error_message;
    }

}


?>