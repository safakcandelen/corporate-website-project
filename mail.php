<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $mail = new PHPMailer(true);
  try {
    // Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0; // debug on - off
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP sunucusu örnek: mail.alanadi.com
    $mail->SMTPAuth = true; // SMTP Doğrulama
    $mail->Username = 'safaksmtp@gmail.com'; // Mail kullanıcı adı
    $mail->Password = 'bqzlyklamymunebm'; // Mail şifresi
    $mail->SMTPSecure = 'ssl'; // Şifreleme
    $mail->Port = 465; // SMTP Port
    $mail->SMTPOptions = [
      'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      ]
    ];

    // Alıcılar
    $mail->setFrom('safaksmtp@gmail.com', 'Serinova İletişim Formu');
    $mail->addAddress('safaksmtp@gmail.com');
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    // İçerik
    $mail->isHTML(true);
    $mail->Subject = "Konu: ".$_POST['subject'];
    $message = "Konu: " . $_POST['subject'] . "<br>";
    $message = "İsim: " . $_POST['name'] . "<br>";
    $message .= "E-posta: " . $_POST['email'] . "<br>";
    $message .= "Mesaj: " . $_POST['message'];
    
    $mail->Body = $message;
    
    $mail->send();

    echo "
    <script>
    alert('Mesajınız başarıyla gönderilmiştir.');
    document.location.href = 'iletisim.php' 
    </script>" ;

  } catch (Exception $e) {
    echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
  }
}
?>
