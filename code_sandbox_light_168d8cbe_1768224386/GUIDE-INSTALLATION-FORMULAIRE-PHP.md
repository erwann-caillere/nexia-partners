/**
 * GUIDE D'INSTALLATION - FORMULAIRE AVEC SMTP OVH
 * Nexia Partners
 */

## 🎯 SOLUTION COMPLÈTE

Votre site reste sur **Netlify** (gratuit + rapide)
Le formulaire envoie vers **script PHP sur OVH** (votre SMTP)

---

## 📦 FICHIERS CRÉÉS

1. **send-email.php** - Version simple (fonction mail() PHP)
2. **send-email-smtp.php** - Version avancée (PHPMailer)

---

## 🚀 INSTALLATION (10 MINUTES)

### Étape 1 : Uploader le script PHP sur OVH (5 min)

1. **Connectez-vous à OVH** : https://www.ovh.com/manager/
2. **Hébergements Web** → Votre hébergement
3. **FTP** ou **File Manager**
4. **Uploadez** `send-email.php` à la racine (ou dans dossier /form/)

**URL du script sera :**
- Si racine : `https://nexia-partners.com/send-email.php`
- Si dossier : `https://nexia-partners.com/form/send-email.php`

### Étape 2 : Tester le script PHP (2 min)

Créez un fichier `test-form.html` :

```html
<!DOCTYPE html>
<html>
<body>
<h1>Test Formulaire</h1>
<form action="https://nexia-partners.com/send-email.php" method="POST">
    <input type="text" name="name" placeholder="Nom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="company" placeholder="Entreprise" required><br>
    <textarea name="message" placeholder="Message" required></textarea><br>
    <button type="submit">Envoyer Test</button>
</form>
</body>
</html>
```

**Testez :** Ouvrez test-form.html → Soumettez
**Vérifiez :** Email reçu sur erwann@nexia-partners.com

### Étape 3 : Modifier le formulaire sur le site (3 min)

Dans `contact-diagnostic-ia.html`, changez la ligne 99 :

**AVANT :**
```html
<form id="contactForm" method="POST" data-netlify="true" action="/merci.html">
```

**APRÈS :**
```html
<form id="contactForm" method="POST" action="https://nexia-partners.com/send-email.php">
```

**Supprimez aussi :** les lignes Netlify (101-104)

---

## ⚠️ PROBLÈME POTENTIEL : CORS

Si le formulaire ne fonctionne pas à cause de CORS, ajoutez ce JavaScript dans le formulaire :

```javascript
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('https://nexia-partners.com/send-email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = 'merci.html';
        } else {
            alert('Erreur : ' + data.message);
        }
    })
    .catch(error => {
        alert('Erreur d\'envoi');
        console.error(error);
    });
});
```

---

## ✅ VÉRIFICATIONS

### Le script PHP fonctionne si :
- ✅ Pas d'erreur 500 quand vous accédez à l'URL
- ✅ Email reçu sur erwann@nexia-partners.com
- ✅ Redirection vers merci.html

### Problèmes courants :

**Erreur 500 :**
- Vérifiez les credentials SMTP
- Vérifiez que PHP est activé sur OVH

**Email non reçu :**
- Vérifiez spams
- Vérifiez que smtp_host est correct : `ssl0.ovh.net`
- Essayez l'autre fichier : `send-email-smtp.php` (avec PHPMailer)

**CORS Error :**
- Utilisez le JavaScript ci-dessus
- Ou ajoutez `.htaccess` sur OVH :
```
Header set Access-Control-Allow-Origin "https://nexia-partners.com"
Header set Access-Control-Allow-Methods "POST, OPTIONS"
```

---

## 📊 COMPARAISON SOLUTIONS

| Solution | Coût | Complexité | Emails depuis |
|----------|------|------------|---------------|
| Netlify Forms | 0€ | Simple | notification@netlify.com |
| Formspree Free | 0€ | Simple | @formspree.io |
| Formspree Pro | 10$/mois | Moyen | @nexia-partners.com |
| Script PHP OVH | 0€ | Moyen | contact@nexia-partners.com ✅ |

---

## 🎯 MA RECOMMANDATION

**Utilisez send-email.php** (version simple)

Si ça ne marche pas :
1. Vérifiez les logs PHP sur OVH
2. Testez avec `test-form.html`
3. Essayez `send-email-smtp.php` (PHPMailer)

---

## 💡 ALTERNATIVE RAPIDE

Si vous voulez que **ça marche EN 2 MINUTES** :

Changez juste le formulaire pour envoyer directement à votre email (sans script) :

```html
<form action="mailto:erwann@nexia-partners.com" method="POST" enctype="text/plain">
```

**MAIS** : L'utilisateur verra son client email s'ouvrir (pas professionnel)

---

## 🆘 BESOIN D'AIDE ?

**OVH n'a pas PHP activé ?**
→ Activez dans Manager OVH → Hébergement → PHP

**Credentials SMTP incorrects ?**
→ Vérifiez dans Manager OVH → Emails

**Ça ne marche toujours pas ?**
→ Dites-moi l'erreur exacte que vous voyez

---

**Commencez par Étape 1 : Uploadez send-email.php sur OVH !**
