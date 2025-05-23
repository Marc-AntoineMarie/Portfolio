<?php
// contact_form_handler.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sécurisation des entrées
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Adresse email de destination (boîte pro)
    $to = 'mmarie.galaxie@gmail.com'; // Remplace par ton adresse pro si besoin
    $headers = "From: Portfolio <no-reply@portfolio.local>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mail_subject = "[Portfolio] Nouveau message : $subject";
    $mail_body = "Nom: $name\nEmail: $email\nSujet: $subject\n\nMessage:\n$message";

    $success = mail($to, $mail_subject, $mail_body, $headers);

    if ($success) {
        http_response_code(200);
        echo json_encode(["success" => true, "message" => "Votre message a bien été envoyé !"]);
    } else {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Erreur lors de l'envoi du message. Veuillez réessayer plus tard."]);
    }
    exit;
}
http_response_code(405);
echo json_encode(["success" => false, "message" => "Méthode non autorisée."]);
