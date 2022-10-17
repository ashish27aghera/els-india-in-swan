<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);
require 'PHPMailerAutoload.php';
require 'credential.php';
require 'template.php';
if (isset($_POST)) {
    $mail = new PHPMailer;
    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL;
    $mail->Password = PASS;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom(EMAIL, 'ELS - Contact');
    $mail->addAddress("ashish@itdservices.in");

    $mail->isHTML(true);
    $mail->Subject = 'ELS - Enquiry';
    $mail->Body = $body;
    $mail->AltBody = "";

    $secretKey = "";
    $domain_input = $_POST['domain_input'];
    if ($domain_input == 'els-india.com') {
        $secretKey = "6LdoPgciAAAAALOqahb80vVyavYCixlCpvMOEv5d";
    } else if ($domain_input == 'localhost') {
        $secretKey = "6Lc3PwciAAAAAPIsWziYyMQVGIRkvsEDfETXEusu";
    }

    $userIp = $_SERVER["REMOTE_ADDR"];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $response . "&remoteip=" . $userIp;
    $verify = file_get_contents($url);
    $captcha_success = json_decode($verify);
    if (!$captcha_success->success) {
        echo "<script>alert('Captcha error found!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }

    if (!$mail->send()) {
        echo "<script>alert('Message could not be sent!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    } else {
        echo "<script>alert('Message sent!');</script>";
        echo "<script>window.location.href='index.php'</script>";
        exit;
    }
}
