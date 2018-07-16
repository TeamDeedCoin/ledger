<?php
if( !empty($_POST) ) {
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
    if (@mail('warren@deedcoinlaunch.com', $subjects, filter($content), $headers)){
        echo "We'll be in contact ...";
    }else {
        echo "Mail not sent";
    }
}

function filter($string){
    $string = addslashes($string);
    return htmlentities($string, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}

