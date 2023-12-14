<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$username = $_POST['username'];
$usersurname = $_POST['usersurname'];
$age = $_POST['age'];
$emailuser = $_POST['emailuser'];


// function sendEmail($username, $usersurname, $age, $DOB, $сountry, $phone, $emailuser, $userpassword, $personality) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        //$mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->SMTPKeepAlive = true;   
        $mail->isSMTP();                                      // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'a.puzenko2004@gmail.com';                     // SMTP username
        $mail->Password   = 'jrif hyrh odxk uvhm';                              // SMTP password
        $mail->SMTPSecure = 'ssl';            // Enable implicit TLS encryption
        $mail->Port       = 465;                                    // TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('a.puzenko2004@gmail.com', 'Puzenko Artem');
        $mail->addAddress('a.puzenko2004@gmail.com');   

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Data from registration form';
        $mail->Body    = 'Ім\'я: ' . $username . '<br>' .
                         'Тема повідомлення: ' . $usersurname . '<br>' .
                         'Повідомлення: ' . $age . '<br>' .
                         'Email: ' . $emailuser . '<br>' .

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header('Location: sendOK.html');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


    // }

