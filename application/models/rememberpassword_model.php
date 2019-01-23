<?php
class Rememberpassword_model extends CI_Model{
    public function __constrget_get_uct(){
        $this->load->database();
        $this->load->dbforge();
        $this->load->library('session');
    }
public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "mail.hypertechsolutions.co.ke";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "mkyalo@hypertechsolutions.co.ke";  // user email address
        $mail->Password   = "ky@lo@hypertech18";            // password in GMail
        
        $mail->SetFrom('mkyalo@hypertechsolutions.co.ke', '');  //Who is sending the email
        $mail->AddReplyTo("kmarcelus92@gmail.com","Firstname Lastname");  //email address that receives the response
        $mail->Subject    = "RESET PASSWORD";
        $mail->Body      = /*-----------email body starts-----------*/
        'This is a password reset process!
        For Faraja Hub.
        You have forgotten your password
        
                        
        Please click this link to activate your account:
            
        ' . base_url() . 'Pages/resetpassword/resetpassword']; 
        //'email=' . $_POST['email'] . '&hash=' . $this->data['hash'] ;
        /*-----------email body ends-----------*/;;
        $mail->AltBody    = 
        $destino = $_POST['email']; // Who is addressed the email to
        $mail->AddAddress($destino, "");
        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        // $this->load->view('sent_mail',$data);
    }
 ?>   