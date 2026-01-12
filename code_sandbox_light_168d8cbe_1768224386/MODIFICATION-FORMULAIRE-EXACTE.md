# 🔧 MODIFICATION DU FORMULAIRE - GUIDE EXACT

## ✏️ CHANGEMENTS À FAIRE

### Dans `contact-diagnostic-ia.html`

**Trouvez la ligne 99 (actuelle) :**
```html
<form id="contactForm" name="contact" method="POST" data-netlify="true" netlify-honeypot="bot-field" action="/merci.html">
```

**Remplacez par :**
```html
<form id="contactForm" method="POST" action="https://nexia-partners.com/send-email.php">
```

**Supprimez les lignes 100-104 :**
```html
<!-- Champ anti-spam caché -->
<input type="hidden" name="form-name" value="contact" />
<p style="display: none;">
    <label>Ne pas remplir : <input name="bot-field" /></label>
</p>
```

**Gardez le champ anti-spam suivant :**
```html
<p style="display: none;">
    <label>Ne pas remplir : <input name="bot-field" /></label>
</p>
```

---

## ⚠️ IMPORTANT

**Avant de modifier**, uploadez d'abord `send-email.php` sur OVH !

**Sinon**, le formulaire pointera vers un script qui n'existe pas.

---

## ✅ ORDRE DES OPÉRATIONS

1. **Uploader** `send-email.php` sur OVH
2. **Tester** l'URL : https://nexia-partners.com/send-email.php
3. **Modifier** le formulaire (ligne 99)
4. **Redéployer** le site sur Netlify
5. **Tester** le formulaire complet

---

**Êtes-vous prêt à uploader le script sur OVH ?**
