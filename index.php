<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['submit']))
{
    $to      = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    try {
    //Server settings
    $mail->SMTPDebug = FALSE;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'khushbu9737@gmail.com';                     //SMTP username
    $mail->Password   = 'pbgtbrccakvlvlkh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('khushbu9737@gmail.com', 'PHP Summer Internship');
    $mail->addAddress($to, '');     //Add a recipient
   
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
   

    $mail->send();
    echo 'Message has been sent';
    echo "<script>alert('Your Message is been sent successfully');</script>";
}
 catch (Exception $e) {
    echo "<script>alert('Something went wrong');</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
    <link rel="icon" type="image/x-icon" href="Mail Account.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style2.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Habibi&display=swap" rel="stylesheet">
</head>
<body>
    <div class="col-8">
        <div class="row">
        <div class="col-7">
            <span class="title">Email Sender</span>
            <div class="wrapper">
            <form class="p-3 mt-3" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user">To:</span>
                <input type="text" name="to" id="userName" placeholder="Enter id">
            </div>
          <div class="form-field d-flex align-items-center">
                <span class="far fa-user">Subject:</span>
                <input type="text" name="subject" id="pwd" placeholder="Enter Subject">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user">Message: </span>
                <input type="text" name="message" id="pwd" placeholder="Enter the message">
            </div>
            <button class="btn mt-3" name="submit">Send</button>
        </form>
        </div>

        </div>
        <div class="col-5">
            <img src="wave (4) 1.png" id="image1" alt="Wave">
            <img src="Catching the mail.png" id="image2" alt="mail">
        </div>
        </div>
    </div>
    <div class="circle2"></div>
</body>
</html>