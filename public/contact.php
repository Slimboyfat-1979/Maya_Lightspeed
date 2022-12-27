<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once ('../resources/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <title>Maya V3</title>
</head>
<body>

<section>
    <div id="hero">
        <?php include('top_nav.php'); ?>
    </div>
</section>
<section id="next">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h2>Contact Us</h2>
                    <p class="mb-3">
                        For all enquiries please call <a href="tel:03 428-0036">03-428-0036</a> <br> or email us using the contact form.
                        <br>We would love to hear from you!
                    </p>

                    <ul class="list-unstyled pl-md-5 mb-5">
                        <li class="d-flex text-black mb-2">
                            <span class=""><span class="icon-map"></span></span> Unit 5/15 Red Oaks Drive
                            <br> Remarkables Park <br> Queenstown <br> New Zealand
                        </li>
                        <li class="d-flex text-black mb-2"><span class="mr-3"><span class="icon-phone"></span></span>
                        <li class="d-flex text-black"><span class=""><span class="icon-envelope-o"></span></span> <a
                                    href="mailto:info@mayamusic.co.nz">info@mayamusic.co.nz</a> </li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <form class="mb-5" action="contact.php" method="post" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="subject" class="col-form-label">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message" class="col-form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" name="submit" class="btn btn-primary rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="footer-relative">
    <?php include('footer_new.php') ?>
</section>

<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>

<?php

$name = '';
$email = '';
$subject = '';
$message = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//Load Composer's autoloader
require '../resources/templates/back/mailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = ' smtp.postmarkapp.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = '4001065b-3cfc-410a-b078-c04aa44dcded';                     //SMTP username
    $mail->Password = '4001065b-3cfc-410a-b078-c04aa44dcded';                               //SMTP password
    $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($email, $name);     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
//    echo 'Message has been sent';
} catch (Exception $e) {
//    echo "<p style='visibility: hidden'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
}

?>