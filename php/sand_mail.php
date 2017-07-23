<?php

require_once "./PHPMailer/PHPMailerAutoload.php";

function sandMail($Subject,$text,$email){
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'leather2m@gmail.com';                 // SMTP username
    $mail->Password = 'malvex1987';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($email, 'books store');
    $mail->addAddress($email, 'order book');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $Subject;
    $mail->Body    = $text;
    $mail->AltBody = $Subject;

    if(!$mail->send()) {
        echo 'ошибка отправки письма';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Письмо отправленно';
    }
}
$nameClient = $_POST['nameClient'];
$name_book  = $_POST['name_book'];
$address    = $_POST['address'];
$count      = $_POST['count'];
$email      = $_POST['email'];
$Subject    = 'Заказ книги';

$text = 'Имя клиента- '.$nameClient.';  Адрес клиента: '.$address.'Название книги- '.$name_book.' ; кол-во книг '.$count;

sandMail($Subject,$text,$email);

