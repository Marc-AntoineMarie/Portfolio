<?php
require_once __DIR__ . '/../lib/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/../lib/PHPMailer/SMTP.php';
require_once __DIR__ . '/../lib/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // Charge Composer (dotenv et PHPMailer)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

header('Content-Type: application/json');

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

$mail = new PHPMailer(true);
try {
    // $mail->SMTPDebug = 0; // Mets à 0 pour éviter les logs SMTP dans la réponse
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPDebug = 0;
    $mail->Port = 587;

    $mail->setFrom('mmarie.galaxie@gmail.com', 'Portfolio');
    $mail->addAddress('mmarie.galaxie@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->Subject = "[Portfolio] Nouveau message : $subject";
    $mail->isHTML(true); // Active le mode HTML

    $mail->Body = '
    <div style="font-family: Arial, sans-serif; color: #222; background: #f6f6f6; padding: 20px;">
        <div style="max-width: 600px; margin: auto; background: #fff; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); padding: 24px;">
            <h2 style="color: #3d6cb9; border-bottom: 1px solid #eee; padding-bottom: 8px;">📬 Nouveau message reçu depuis le Portfolio</h2>
            <table style="width: 100%; margin: 20px 0;">
                <tr>
                    <td style="font-weight: bold; width: 120px;">Nom :</td>
                    <td>' . htmlspecialchars($name) . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Email :</td>
                    <td>' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Sujet :</td>
                    <td>' . htmlspecialchars($subject) . '</td>
                </tr>
            </table>
            <div style="margin-top: 24px;">
                <p style="font-weight: bold; margin-bottom: 8px;">Message :</p>
                <div style="background: #f0f4fa; border-radius: 6px; padding: 16px; color: #333; font-size: 1.1em;">
                    ' . nl2br(htmlspecialchars($message)) . '
                </div>
            </div>
            <p style="margin-top: 32px; font-size: 0.9em; color: #888;">Ce message a été envoyé automatiquement depuis le formulaire de contact du portfolio.</p>
        </div>
    </div>
';

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Votre message a bien été envoyé !']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Erreur lors de l'envoi du message : {$mail->ErrorInfo} / {$e->getMessage()}"]);
}