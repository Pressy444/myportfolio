
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Destinataire (votre adresse e-mail)
    $to = "pressylou@hotmail.com";

    // En-têtes
    $headers = "From: $name <$email>";

    $mailBody = "Nom: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Numéro de téléphone: $mobileNumber\n";
    $mailBody .= "Sujet: $subject\n\n";
    $mailBody .= "Message:\n$message";

    // Envoyer l'e-mail
    mail($to, $subject, $mailBody, $headers);
}
?>
