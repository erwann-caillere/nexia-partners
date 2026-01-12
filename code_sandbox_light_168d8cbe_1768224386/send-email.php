<?php
// Configuration SMTP OVH
$smtp_host = 'ssl0.ovh.net';
$smtp_port = 465;
$smtp_user = 'contact@nexia-partners.com';
$smtp_pass = 'Tiffenn-22';
$from_email = 'contact@nexia-partners.com';
$to_email = 'erwann@nexia-partners.com';

// Headers CORS pour accepter les requêtes depuis Netlify
header('Access-Control-Allow-Origin: https://nexia-partners.com');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Si c'est une requête OPTIONS (preflight), on répond OK
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// On accepte seulement POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit();
}

// Récupérer les données du formulaire
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
$role = isset($_POST['role']) ? htmlspecialchars($_POST['role']) : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
$employees = isset($_POST['employees']) ? htmlspecialchars($_POST['employees']) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

// Validation basique
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Champs obligatoires manquants']);
    exit();
}

// Validation email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email invalide']);
    exit();
}

// Préparer le sujet et le corps de l'email
$subject = '🚨 Nouveau Lead - Diagnostic IA Nexia Partners';

$email_body = "
===========================================
NOUVEAU LEAD - DIAGNOSTIC IA GRATUIT
===========================================

Nom complet : $name
Entreprise : $company
Fonction : $role
Email : $email
Téléphone : $phone
Pays : $country
Taille entreprise : $employees

MESSAGE / BESOIN :
-------------------------------------------
$message
-------------------------------------------

Date : " . date('d/m/Y à H:i') . "

===========================================
";

// Envoyer l'email avec PHPMailer (recommandé) ou mail() basique
// Option 1 : Fonction mail() PHP (simple mais moins fiable)
$headers = "From: $from_email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to_email, $subject, $email_body, $headers)) {
    http_response_code(200);
    echo json_encode([
        'success' => true, 
        'message' => 'Email envoyé avec succès',
        'redirect' => 'https://nexia-partners.com/merci.html'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'envoi']);
}
?>
