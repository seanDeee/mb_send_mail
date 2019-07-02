<?php
    //入力値の受け取りと変数への格納
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");



function getUserIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) //if from shared
    {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //if from a proxy
    {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}

    //Name of Company
    $cName = "Name";

    //Admin Email
    $to = "email@email.com";

    //CC E-mailto:
    $cc = "cc@email.com";

    //Email Subject
    $subject = $_POST['subject'];
    //or
    //$subject = "Contact Form Submission";

    //Get the Input Datas'
    $name = $_POST['name'];
    $eMail = $_POST['eMail'];
    $message = $_POST['message'];

    //The E-mail Body Content
    $emailBody  .= "E-mail was sent from the site inquiry form.";
    $emailBody .= "\r\n\r\n";
    $emailBody  .= "After confirming the contents, please reply as soon as possible. " . "\r\n\r\n";
    $emailBody  .= "Name:" . $name . "\r\n";
    $emailBody  .= "E-mail:" . $eMail . "\r\n";
    $emailBody  .= "Message:" . $message . "\r\n";
    $emailBody .= "\r\n\r\n";

    $emailBody .= "\r\n\r\n";
    $emailBody .="送信された日時：".date( "Y/m/d (D) H:i:s", time() )."\r\n\r\n";
    $emailBody .= "IP Address: " . getUserIpAddr() ."\r\n\r\n";
    $emailBody .= "送信者のホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\r\n\r\n";
    $emailBody .= "\r\n\r\n";

    //Email Header
    $headers = "From: $cName <$eMail>\\n";
    //    $headers = "From: ".$cName." <".$eMail.">\r\n";
    //    $headers = "From: $eMail\n";

    //CC
    $headers .= 'Cc:'. $cc . "\r\n";
    mb_send_mail ($to , $subject , $emailBody, $headers );





    //User Side
    $headers = "From: $to\n";
    $to = $eMail;
    $subject = "Sample Subject for Autoreply to user";
    $emailBody  = "Subject This is an email from the inquiry form practice.";
    $emailBody .= "\r\n\r\n";
    $emailBody  .= "Thank you for your inquiry. ";
    $emailBody  .= "After confirming the email, we will contact you later. ";
    $emailBody  .= "Please wait for a while.";
    $emailBody  .= "\r\n\r\n";
    $emailBody  .= "Name:" . $name . "\r\n";
    $emailBody  .= "E-mail:" . $eMail . "\r\n";
    $emailBody  .= "Message:" . $message ."\r\n";
    $emailBody .= "\r\n\r\n";
    $emailBody .= "--------------------------" . "\r\n";
    $emailBody .= "署名" . "\r\n";
    $emailBody .= "--------------------------" . "\r\n";


//上記で値を代入した変数の値をセット
if (mb_send_mail ($to , $subject , $emailBody, $headers )) {
    //	echo "送信完了";
    header("Location: ./thanks.php",TRUE,301);
    exit;
} else {
	echo "送信できませんでした。";
}

?>
