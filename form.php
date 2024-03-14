<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['gonder'])) {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    $mail->IsSMTP();
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sulou2245@gmail.com';
    $mail->Password = 'gtds bpze ugvz zwge';
    $mail->SMTPSecure = 'tls';  // Değişiklik burada
    $mail->Port = 587;  // Port da değişiklik burada
    $mail->SMTPDebug = 0; // 0 veya 2 olarak ayarlayabilirsiniz
    $mail->setFrom('sulou2245@gmail.com');
    $mail->addAddress('suleymanfatihunal@gmail.com');

    $mail->isHtml(true);
    $mail->Subject = $_POST["adsoyad"];  // Değişiklik burada
    $mail->Body = $_POST["konu"] . "<br>Gönderen Kişi: " . $_POST["email"];


    $mail->Send();

    echo "
    <script> 
    alert('İleti başarıyla gönderildi');
    document.location.href ='api/index.php';
    </script>
    ";
}
else {
    echo "<script> 
    alert('İleti maalesef gönderilemedi');
    document.location.href ='api/index.php';
    </script>";
}