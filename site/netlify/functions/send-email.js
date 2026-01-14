// Fonction Netlify pour envoyer des emails via SMTP OVH
// Ce fichier s'exécute sur les serveurs de Netlify

const nodemailer = require('nodemailer');

exports.handler = async (event, context) => {
  // Autoriser seulement les requêtes POST
  if (event.httpMethod !== 'POST') {
    return {
      statusCode: 405,
      body: JSON.stringify({ message: 'Méthode non autorisée' })
    };
  }

  // Récupérer les données du formulaire
  const data = JSON.parse(event.body);
  
  // Extraire les champs
  const {
    name,
    company,
    role,
    email,
    phone,
    country,
    employees,
    message
  } = data;

  // Validation basique
  if (!name || !email || !company || !message) {
    return {
      statusCode: 400,
      body: JSON.stringify({ 
        success: false,
        message: 'Champs obligatoires manquants' 
      })
    };
  }

  // Configuration du transporteur SMTP avec vos identifiants OVH
  const transporter = nodemailer.createTransport({
    host: 'ssl0.ovh.net',           // Serveur SMTP OVH
    port: 465,                       // Port SSL
    secure: true,                    // Utiliser SSL
    auth: {
      user: 'contact@nexia-partners.com',    // Votre email OVH
      pass: 'Tiffenn-22'                     // Votre mot de passe OVH
    }
  });

  // Contenu de l'email
  const emailContent = `
===========================================
NOUVEAU LEAD - DIAGNOSTIC IA GRATUIT
===========================================

Nom complet : ${name}
Entreprise : ${company}
Fonction : ${role}
Email : ${email}
Téléphone : ${phone}
Pays : ${country}
Taille entreprise : ${employees || 'Non renseigné'}

MESSAGE / BESOIN :
-------------------------------------------
${message}
-------------------------------------------

Date : ${new Date().toLocaleString('fr-FR')}

===========================================
  `;

  // Options de l'email
  const mailOptions = {
    from: '"Nexia Partners" <contact@nexia-partners.com>',  // Expéditeur
    to: 'erwann@nexia-partners.com',                        // Destinataire
    replyTo: email,                                          // Répondre au client
    subject: '🚨 Nouveau Lead - Diagnostic IA Nexia Partners',
    text: emailContent
  };

  try {
    // Envoyer l'email
    await transporter.sendMail(mailOptions);
    
    // Réponse de succès
    return {
      statusCode: 200,
      body: JSON.stringify({ 
        success: true,
        message: 'Email envoyé avec succès' 
      })
    };
    
  } catch (error) {
    // En cas d'erreur
    console.error('Erreur envoi email:', error);
    
    return {
      statusCode: 500,
      body: JSON.stringify({ 
        success: false,
        message: 'Erreur lors de l\'envoi de l\'email',
        error: error.message
      })
    };
  }
};
