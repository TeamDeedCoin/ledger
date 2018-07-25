<?php

$secret = "6LfoXGYUAAAAAGzzhVvhPx-0Yw3scWRlIIE75xtI";
$response = $_POST["captcha"];
$remoteip = $_SERVER["REMOTE_ADDR"]; 

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}&remoteip={$remoteoip}");

$captcha_success=json_decode($verify);

/*
if( $_POST["g-recaptcha-response"] ) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"], 
        $_POST["g-recaptcha-response"]
    );
}
 */
if( $captcha_success->success == true) {

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $email = $_POST["email"];
    $subjects = trim($_POST["subjects"]);
    $message = trim($_POST["message"]);
    $details = "Name: " . $name ."\r\n". "Phone: ".$phone."\r\n" ."Email: ". $email."\r\n" . "Message: ".$message . "\r\n";

    $content = filter($details);

    $headers =  'From: <'.$email. ">\r\n" .
        'Reply-To: <'.$email . ">\r\n" .
        'X-Mailer: PHP/' . phpversion();

    @mail('team@ledgerleap.com', $subjects, $content, $headers);
    echo "<span id='success-message'>We'll be in contact ...</span>";

}else if($captcha_success-> == false){
    //bad bot go away!
    echo "<span id='failure-message'>Mail not sent</span>";
}

function filter($string){
    $string = addslashes($string);
    return htmlentities($string, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}

