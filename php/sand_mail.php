<?php
require_once "config.php";
require_once 'functions.php';
//require_once "./PHPMailer/PHPMailerAutoload.php";
//
//function sandMail($Subject,$text,$email){
//    $mail = new PHPMailer;
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'leather2m@gmail.com';                 // SMTP username
//    $mail->Password = 'malvex1987';                           // SMTP password
//    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 465;                                    // TCP port to connect to
//    $mail->CharSet = 'UTF-8';
//
//    $mail->setFrom($email, 'books store');
//    $mail->addAddress($email, 'order book');     // Add a recipient
//    $mail->isHTML(true);                                  // Set email format to HTML
//
//    $mail->Subject = $Subject;
//    $mail->Body    = $text;
//    $mail->AltBody = $Subject;
//
//    if(!$mail->send()) {
//        echo 'ошибка отправки письма';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//    } else {
//        echo 'Письмо отправленно';
//    }
//}



$nameClient = deleteTags($_POST['nameClient']);
$name_book  = deleteTags($_POST['name_book']);
$address    = deleteTags($_POST['address']);
$count      = (int)deleteTags($_POST['count']); //only for version php7
$subject    = 'Заказ книги';

//$text = 'Имя клиента- '.$nameClient.';  Адрес клиента: '.$address.'Название книги- '.$name_book.' ; кол-во книг '.$count;

//sandMail($Subject,$text,$email);

$to      = MAIL_ADMIN;
$message = 'Имя клиента- '.$nameClient.';  Адрес клиента: '.$address.'; id книги - '.$name_book.' ; кол-во книг '.$count;
$headers = 'From: booksgallery@bookworld.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo 'mail sand ok';