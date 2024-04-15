<?use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php for PHPMailer

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'velavanvelavan790@gmail.com'; // Your Gmail email address
    $mail->Password   = 'velavan790vela';             // Your Gmail app password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('velavanvelavan790@gmail.com', 'velavan'); // Sender's email address
    $mail->addAddress('velavanvelavan780@gmail.com'); // Recipient's email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test email';
    $mail->Body    = 'This is a test email';

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Failed to send email. Error: {$mail->ErrorInfo}";
}

?>