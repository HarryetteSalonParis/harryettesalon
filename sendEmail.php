
<?php
    
    if(isset($_POST['user_input_service'])){
        $to = 'Taganatishang@gmail.com';
        $from = $_POST['user_input_emailAddress'];
        $receiverName = $_POST['user_input_fullName'];
        $serviceChosen = $_POST['user_input_service'];
        $contactNumber = $_POST['user_input_contactNumber'];
        $subject = $serviceChosen;

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
    

        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">;Hi';
        $message .= $receiverName .= '!</h1>';
        $message .= '<p style="color:#080;font-size:18px;">';
        $message .= $_POST['user_input_description'] .= '?</p>';
        $message .= '</body></html>';

        // Sending email
        if(mail($to, $subject, $message, $headers)){
            return 'success';
        } else{
            return 'error';
        }
}
?>