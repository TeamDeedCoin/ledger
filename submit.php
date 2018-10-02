<?php

require_once('phpmailer/PHPMailerAutoload.php');

//production
$secret = "6LfoXGYUAAAAAGzzhVvhPx-0Yw3scWRlIIE75xtI";
//dev
//$secret = "6LeGYGYUAAAAAG0OMLPSKjv2_AnhvKyXrripPXJE";
$response = $_POST["g-recaptcha-response"];
$remoteip = $_SERVER["REMOTE_ADDR"]; 

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}&remoteip={$remoteip}");

$captcha_success=json_decode($verify);

if( $captcha_success->success == true) {

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $email = $_POST["email"];
    $subjects = trim($_POST["subjects"]);
    $message = trim($_POST["message"]);
    $details = "Name: " . $name ."\r\n". "Phone: ".$phone."\r\n" ."Email: ". $email."\r\n" . "Message: ".$message . "\r\n";

    $content = filter($details);
/*
    $headers =  'From: <'.$email. ">\r\n" .
        'Reply-To: <'.$email . ">\r\n" .
        'X-Mailer: PHP/' . phpversion();
 */
    $myMail = new PHPMailer(true);
    $myMail->addAddress($email);
    $myMail->Subject = $subjects;
    $myMail->Body = $content; 
    $myMail->send();
/*
    @mail('team@ledgerleap.com', $subjects, $content, $headers);
 */
    echo "<span id='success-message'>We'll be in contact ...</span>";

}else if($captcha_success->success == false){
    //bad bot go away!
    echo "<span id='failure-message'>Mail not sent</span>";
}

function filter($string){
    $string = addslashes($string);
    return htmlentities($string, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}
function initMail(&$myMail){
    $myMail->isSMTP();

    $myMail->Host = "smtp.gmail.com";
    $myMail->SMTPAuth = true;
    $myMail->Username = "team@ledgerleap.com";
    $myMail->Password = "";
    $myMail->SMTPSecure = 'tls';
    $myMail->Port = 587;

    $myMail->setFrom("team@ledgerleap.com", "Ledger Leap"); 
    $myMail->isHTML(true);
}
