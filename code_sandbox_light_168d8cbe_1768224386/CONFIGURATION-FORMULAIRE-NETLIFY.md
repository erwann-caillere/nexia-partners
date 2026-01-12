# 📧 Configuration du Formulaire de Contact Nexia Partners

## ✅ État Actuel

Le formulaire de contact est **déjà configuré** pour fonctionner avec Netlify Forms.

**Page :** `contact-diagnostic-ia.html`  
**Redirection après envoi :** `merci.html`  
**Email de réception :** À configurer → **erwann@nexia-partners.com**

---

## 🚀 Comment Configurer les Notifications Email (2 minutes)

### Étape 1 : Allez dans Netlify

1. **Ouvrez** : https://app.netlify.com/sites/nexia-partners
2. **Connectez-vous** avec votre compte Netlify

---

### Étape 2 : Accédez aux Formulaires

Dans le **menu de gauche**, cliquez sur :
- **"Forms"** (ou "Formulaires" en français)

**OU**

- **Site settings** → **Forms**

---

### Étape 3 : Configurer les Notifications Email

1. **Cliquez sur le formulaire "contact"** (il apparaîtra après le premier déploiement)

2. **Cliquez sur "Settings & notifications"** (ou "Paramètres et notifications")

3. **Trouvez la section "Form notifications"**

4. **Cliquez sur "Add notification"** (Ajouter une notification)

5. **Sélectionnez "Email notification"**

6. **Remplissez :**
   - **Event to listen for** : `New form submission` (Nouvelle soumission)
   - **Email to notify** : `erwann@nexia-partners.com`
   - **Custom email subject** (optionnel) : `🚨 Nouveau Lead - Diagnostic IA Nexia Partners`

7. **Cliquez sur "Save"**

---

## ✅ Ce Qui Va Se Passer

### Quand quelqu'un remplit le formulaire :

1. ✅ **Les données sont capturées** par Netlify Forms
2. ✅ **Un email est envoyé automatiquement** à **erwann@nexia-partners.com**
3. ✅ **Le visiteur voit** la page de remerciement (`merci.html`)
4. ✅ **Toutes les soumissions** sont stockées dans Netlify → Forms

---

## 📊 Voir les Soumissions dans Netlify

### Option 1 : Recevoir par Email
✅ **Déjà configuré** avec `erwann@nexia-partners.com`

### Option 2 : Consulter dans Netlify
1. **Netlify Dashboard** → **Forms**
2. **Cliquez sur "contact"**
3. **Voir toutes les soumissions** avec :
   - Nom complet
   - Entreprise
   - Fonction
   - Email
   - Téléphone
   - Pays
   - Taille entreprise
   - Message
   - Date/Heure

### Option 3 : Export CSV
Dans **Netlify → Forms → contact** :
- Cliquez sur **"Export CSV"**
- Importez dans Excel ou votre CRM

---

## 🎯 Exemple d'Email Reçu

```
Objet : 🚨 Nouveau Lead - Diagnostic IA Nexia Partners

Nouvelle soumission du formulaire "contact"

Nom : Jean Dupont
Entreprise : TechCorp SAS
Fonction : Directeur Général
Email : jean.dupont@techcorp.fr
Téléphone : +33 6 12 34 56 78
Pays : France
Taille entreprise : 51-200 employés
Message : Nous souhaitons automatiser notre service client 
avec l'IA et améliorer l'efficacité de nos équipes commerciales.

Date : 10 janvier 2026 à 14h30
```

---

## 🔧 Configuration Avancée (Optionnel)

### Ajouter une notification Slack
1. **Netlify → Forms → Settings**
2. **Add notification** → **Slack**
3. Connectez votre workspace Slack
4. Recevez les leads instantanément dans Slack

### Intégration avec Zapier
1. **Netlify → Forms → Integrations**
2. **Connectez Zapier**
3. Automatisez l'envoi vers :
   - Google Sheets
   - HubSpot
   - Pipedrive
   - Votre CRM

---

## ⚠️ Important : Premier Déploiement

Le formulaire apparaîtra dans **Netlify → Forms** seulement **APRÈS** :
1. ✅ Avoir déployé le site avec le formulaire
2. ✅ Avoir soumis le formulaire **UNE FOIS** (test)

### Pour Tester :
1. Redéployez le site sur Netlify
2. Allez sur https://nexia-partners.com/contact-diagnostic-ia.html
3. Remplissez le formulaire avec vos propres infos (TEST)
4. Soumettez
5. Vérifiez :
   - ✅ Redirection vers `merci.html`
   - ✅ Email reçu sur `erwann@nexia-partners.com`
   - ✅ Soumission visible dans Netlify → Forms

---

## 🛡️ Anti-Spam Intégré

Le formulaire inclut **déjà** :
- ✅ **Honeypot** (champ caché anti-bot)
- ✅ **Netlify Forms Spam Filter** (automatique)
- ✅ **reCAPTCHA** (activable dans Netlify → Site settings → Forms)

---

## 📈 Statistiques de Conversion

Dans **Netlify → Forms** :
- Nombre de soumissions par jour/semaine/mois
- Taux de conversion (si configuré avec Analytics)

Dans **Google Analytics** :
- Conversion trackée automatiquement (voir `merci.html`)
- Event : `Form Submission`

---

## ✅ Checklist Finale

- [✅] Formulaire créé avec Netlify Forms
- [✅] Page de remerciement créée (`merci.html`)
- [⏳] **À FAIRE** : Configurer `erwann@nexia-partners.com` dans Netlify
- [⏳] **À FAIRE** : Déployer sur Netlify
- [⏳] **À FAIRE** : Tester une soumission

---

## 🎉 Résultat Final

### Vous aurez :
✅ Formulaire de contact professionnel  
✅ Notification email instantanée sur **erwann@nexia-partners.com**  
✅ Page de confirmation élégante  
✅ Toutes les données stockées dans Netlify  
✅ Export CSV possible  
✅ Anti-spam intégré  
✅ Conversion trackée dans Google Analytics  

---

## 🆘 Besoin d'Aide ?

**Si le formulaire n'apparaît pas dans Netlify après déploiement :**
1. Vérifiez que `data-netlify="true"` est bien dans le `<form>`
2. Soumettez le formulaire UNE FOIS (même en test)
3. Attendez 1-2 minutes
4. Rafraîchissez Netlify → Forms

**Si vous ne recevez pas les emails :**
1. Vérifiez les spams dans `erwann@nexia-partners.com`
2. Vérifiez que la notification email est bien configurée dans Netlify
3. Testez avec un autre email

---

**Déployez maintenant et testez le formulaire !** 🚀
