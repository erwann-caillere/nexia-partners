# ⚡ SOLUTION RAPIDE - FORMULAIRE QUI MARCHE

**Problème :** Netlify Forms ne peut pas utiliser votre SMTP OVH  
**Solution :** Script PHP sur OVH + Formulaire sur Netlify

---

## 🎯 CE QUE J'AI CRÉÉ

1. **send-email.php** - Script qui envoie via votre SMTP OVH
2. **Guide d'installation** - Étapes détaillées

---

## ✅ CE QU'IL FAUT FAIRE (10 MINUTES)

### 1️⃣ Uploader le script sur OVH (5 min)

**Où ?** Manager OVH → FTP ou File Manager

**Fichier :** `send-email.php`

**URL finale :** https://nexia-partners.com/send-email.php

### 2️⃣ Tester le script (2 min)

Créez `test.html` :
```html
<form action="https://nexia-partners.com/send-email.php" method="POST">
  <input name="name" placeholder="Nom" required>
  <input name="email" type="email" placeholder="Email" required>
  <input name="company" placeholder="Entreprise" required>
  <textarea name="message" required></textarea>
  <button>Envoyer</button>
</form>
```

Testez → Vérifiez email reçu sur **erwann@nexia-partners.com**

### 3️⃣ Modifier le formulaire du site (3 min)

Dans `contact-diagnostic-ia.html`, ligne 99 :

**Changez :**
```html
<form id="contactForm" method="POST" action="https://nexia-partners.com/send-email.php">
```

**Supprimez :** `data-netlify="true"` et les lignes Netlify

Redéployez sur Netlify → **Ça marche !**

---

## 🎉 RÉSULTAT

- ✅ Site sur Netlify (gratuit, rapide)
- ✅ Formulaire envoie via SMTP OVH
- ✅ Emails arrivent sur erwann@nexia-partners.com
- ✅ Depuis contact@nexia-partners.com

**Coût total : 0€ supplémentaire** (vous avez déjà OVH)

---

## 📁 FICHIERS À TÉLÉCHARGER

1. **send-email.php** - À uploader sur OVH
2. **GUIDE-INSTALLATION-FORMULAIRE-PHP.md** - Instructions détaillées

---

**Voulez-vous que je vous aide à uploader sur OVH ?**

Ou préférez-vous essayer seul avec le guide ?
