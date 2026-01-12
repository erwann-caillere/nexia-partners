<?php
/**
 * Script d'envoi d'emails pour formulaire Nexia Partners
 * À héberger sur OVH
 * URL : https://nexia-partners.com/send-email-smtp.php
 */

// Configuration SMTP OVH
define('SMTP_HOST', 'ssl0.ovh.net');
define('SMTP_PORT', 465);
define('SMTP_USER', 'contact@nexia-partners.com');
define('SMTP_PASS', 'Tiffenn-22');
define('FROM_EMAIL', 'contact@nexia-partners.com');
define('FROM_NAME', 'Nexia Partners');
define('TO_EMAIL', 'erwann@nexia-partners.com');

// Headers CORS
header('Access-Control-Allow-Origin: https://nexia-partners.com');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=UTF-8');

// Preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Seulement POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit();
}

// Récupération et nettoyage des données
$data = [
    'name' => trim($_POST['name'] ?? ''),
    'company' => trim($_POST['company'] ?? ''),
    'role' => trim($_POST['role'] ?? ''),
    'email' => trim($_POST['email'] ?? ''),
    'phone' => trim($_POST['phone'] ?? ''),
    'country' => trim($_POST['country'] ?? ''),
    'employees' => trim($_POST['employees'] ?? ''),
    'message' => trim($_POST['message'] ?? '')
];

// Validation
$errors = [];
if (empty($data['name'])) $errors[] = 'Nom requis';
if (empty($data['company'])) $errors[] = 'Entreprise requise';
if (empty($data['email'])) $errors[] = 'Email requis';
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Email invalide';
if (empty($data['message'])) $errors[] = 'Message requis';

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit();
}

// Protection anti-spam basique
if (isset($_POST['bot-field']) && !empty($_POST['bot-field'])) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Spam détecté']);
    exit();
}

// Import PHPMailer (si disponible sur OVH)
// Si PHPMailer n'est pas disponible, utilisez send-email.php (version simple)
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $mail = new PHPMailer(true);
    
    // Configuration SMTP
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = SMTP_PORT;
    $mail->CharSet = 'UTF-8';
    
    // Expéditeur et destinataire
    $mail->setFrom(FROM_EMAIL, FROM_NAME);
    $mail->addAddress(TO_EMAIL);
    $mail->addReplyTo($data['email'], $data['name']);
    
    // Contenu
    $mail->isHTML(false);
    $mail->Subject = '🚨 Nouveau Lead - Diagnostic IA Nexia Partners';
    $mail->Body = "
===========================================
NOUVEAU LEAD - DIAGNOSTIC IA GRATUIT
===========================================

Nom complet : {$data['name']}
Entreprise : {$data['company']}
Fonction : {$data['role']}
Email : {$data['email']}
Téléphone : {$data['phone']}
Pays : {$data['country']}
Taille entreprise : {$data['employees']}

MESSAGE / BESOIN :
-------------------------------------------
{$data['message']}
-------------------------------------------

Date : " . date('d/m/Y à H:i') . "
IP : " . ($_SERVER['REMOTE_ADDR'] ?? 'Inconnue') . "

===========================================
";
    
    // Envoi
    $mail->send();
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Email envoyé avec succès',
        'redirect' => 'https://nexia-partners.com/merci.html'
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erreur d\'envoi : ' . $mail->ErrorInfo
    ]);
}
?>
