<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Construit le contenu du message
    $body = "Prénoms(s) : $prenom\n";
    $body .= "Nom : $nom\n";
    $body .= "Email : $email\n";
    $body .= "Subject : $subject\n";
    $body .= "Message : $message\n";
    
    // Envoie le message
    $success = mail('abmbaye2@gmail.com', 'Contact Form Submission', $body);
    
    // Vérifie si l'envoi a réussi
    if ($success) {
        echo '<div class="success-message">Votre mail a été bien envoyé avec succès.</div>';
    } else {
        echo '<div class="error-message">Votre mail n\'a pas été bien envoyé.</div>';
    }
}
?>
