# 🚀 Guide de Déploiement Pas-à-Pas - Nexia Partners sur Vercel

**Problème :** Vous ne trouvez pas l'hébergement sur Vercel depuis l'interface actuelle  
**Solution :** Déploiement manuel simple en 3 étapes

---

## 📦 **ÉTAPE 1 : Télécharger Votre Site (2 minutes)**

### **Méthode A : Via l'interface de développement**

1. **Créer un fichier ZIP de votre site**
   - Je vais créer une archive avec tous vos fichiers
   - Vous pourrez la télécharger directement

2. **Contenu du ZIP :**
   ```
   nexia-partners-site.zip
   ├── index.html
   ├── offres-ia-entreprise.html
   ├── diagnostic-ia-entreprise.html
   ├── formation-ia-entreprise.html
   ├── accompagnement-ia-dirigeant.html
   ├── mission-pilote-ia.html
   ├── ia-au-service-de-l-humain.html
   ├── formation-ia-france.html
   ├── formation-ia-quebec.html
   ├── a-propos-nexia-partners.html
   ├── blog-ia-entreprise.html
   ├── contact-diagnostic-ia.html
   ├── robots.txt
   ├── sitemap.xml
   ├── css/
   │   └── style.css
   ├── js/
   │   └── main.js
   └── images/
       ├── logo-nexia-partners.png
       ├── hero-meeting.jpg
       ├── formation-ia.jpg
       ├── ia-humain.jpg
       ├── consultant-france.jpg
       ├── consultant-quebec.jpg
       ├── futuristic-ai-interface.jpg
       ├── futuristic-meeting.jpg
       ├── futuristic-neural-network.jpg
       ├── futuristic-training.jpg
       ├── futuristic-human-ai.jpg
       └── futuristic-city.jpg
   ```

### **Méthode B : Liste de fichiers à copier**

Si vous devez copier manuellement, voici la liste complète :

**13 fichiers HTML :**
1. index.html
2. offres-ia-entreprise.html
3. diagnostic-ia-entreprise.html
4. formation-ia-entreprise.html
5. accompagnement-ia-dirigeant.html
6. mission-pilote-ia.html
7. ia-au-service-de-l-humain.html
8. formation-ia-france.html
9. formation-ia-quebec.html
10. a-propos-nexia-partners.html
11. blog-ia-entreprise.html
12. contact-diagnostic-ia.html
13. README.md (optionnel)

**2 fichiers SEO :**
- robots.txt
- sitemap.xml

**Dossiers :**
- css/ (avec style.css)
- js/ (avec main.js)
- images/ (avec 12 images)

---

## 🌐 **ÉTAPE 2 : Déployer sur Vercel (5 minutes)**

### **Option A : Déploiement Glisser-Déposer (PLUS SIMPLE)**

#### **1. Créer un compte Vercel**
- Aller sur : **https://vercel.com**
- Cliquer sur **"Sign Up"** (Inscription)
- Choisir : **Continue with Email** (ou GitHub/GitLab)
- Confirmer votre email

#### **2. Déployer le site**
- Une fois connecté, cliquer sur **"Add New..."** → **"Project"**
- Cliquer sur **"Deploy"** sous "Import Git Repository"
- OU chercher l'option **"Browse"** pour upload manuel
- **Glisser-déposer** votre dossier site (ou ZIP)
- Cliquer sur **"Deploy"**

#### **3. Attendre le déploiement**
- ⏱️ Durée : 30-60 secondes
- ✅ Vous verrez "Your project has been deployed"
- 🌐 Vous obtiendrez une URL : `https://nexia-partners.vercel.app`

**C'EST TOUT ! Votre site est en ligne !** 🎉

---

### **Option B : Via CLI Vercel (Pour utilisateurs avancés)**

```bash
# 1. Installer Vercel CLI
npm install -g vercel

# 2. Se connecter
vercel login

# 3. Déployer (depuis le dossier de votre site)
vercel

# 4. Suivre les instructions
```

---

## 🌍 **ÉTAPE 3 : Configurer Votre Domaine (30 minutes)**

### **1. Acheter le domaine nexia-partners.com**

#### **Sur Namecheap (Recommandé) :**
1. Aller sur : **https://www.namecheap.com**
2. Rechercher : **nexia-partners.com**
3. Ajouter au panier (environ 10-12€)
4. Créer un compte et payer

#### **Sur Google Domains :**
1. Aller sur : **https://domains.google.com**
2. Rechercher : **nexia-partners.com**
3. Acheter (12€)

#### **Sur Cloudflare :**
1. Aller sur : **https://www.cloudflare.com**
2. Registrar → Register Domain
3. nexia-partners.com (10€)

---

### **2. Connecter le domaine à Vercel**

#### **Dans Vercel :**
1. Aller dans votre projet
2. Cliquer sur **"Settings"** (Paramètres)
3. Cliquer sur **"Domains"**
4. Ajouter : **nexia-partners.com**
5. Vercel vous donnera des **enregistrements DNS** à configurer

#### **Type de configuration recommandé :**

**Option A : Vercel Nameservers (PLUS SIMPLE)**
```
Vercel vous donnera des nameservers comme :
ns1.vercel-dns.com
ns2.vercel-dns.com

Dans Namecheap/Google Domains :
→ Remplacer les nameservers par ceux de Vercel
→ Tout est automatique après !
```

**Option B : Enregistrements DNS manuels**
```
Dans votre registrar (Namecheap/Google) :
Ajouter ces enregistrements DNS :

Type  | Nom | Valeur
------|-----|-------
A     | @   | 76.76.21.21
CNAME | www | cname.vercel-dns.com
```

---

### **3. Attendre la propagation DNS**
- ⏱️ Durée : 10 minutes à 24 heures (généralement 1-2h)
- ✅ Votre site sera accessible sur **https://nexia-partners.com**
- 🔒 SSL automatique (HTTPS) activé par Vercel

---

## 📸 **CAPTURES D'ÉCRAN DU PROCESSUS (Guide Visuel)**

### **1. Page d'accueil Vercel après connexion**
```
┌─────────────────────────────────────┐
│  Vercel Dashboard                   │
├─────────────────────────────────────┤
│                                     │
│  [Add New...]  ▼                    │
│    └─ Project                       │
│    └─ Team                          │
│                                     │
│  Your Projects:                     │
│  (vide pour l'instant)              │
│                                     │
└─────────────────────────────────────┘
```

### **2. Page de déploiement**
```
┌─────────────────────────────────────┐
│  Import Git Repository              │
│  ┌───────────────────────────────┐  │
│  │ Or drag and drop a folder     │  │
│  │                               │  │
│  │   [📁 Drop your site here]   │  │
│  │                               │  │
│  └───────────────────────────────┘  │
│                                     │
│  [Deploy] button                    │
└─────────────────────────────────────┘
```

### **3. Déploiement en cours**
```
┌─────────────────────────────────────┐
│  Building...                        │
│  ████████████░░░░░░░░░ 65%         │
│                                     │
│  Queued                     ✅     │
│  Building                   ⏳     │
│  Deploying                  ⏸️     │
└─────────────────────────────────────┘
```

### **4. Déploiement réussi !**
```
┌─────────────────────────────────────┐
│  🎉 Your project is live!           │
│                                     │
│  https://nexia-partners.vercel.app  │
│                                     │
│  [Visit Site] [Configure Domain]   │
└─────────────────────────────────────┘
```

---

## 🆘 **PROBLÈMES FRÉQUENTS & SOLUTIONS**

### **❓ "Je ne trouve pas le bouton Deploy"**

**Solution :**
1. Vérifiez que vous êtes connecté à Vercel
2. Cherchez "Add New" ou "New Project" en haut à droite
3. Si vous ne voyez rien, essayez cette URL directe : **https://vercel.com/new**

---

### **❓ "L'upload de mon ZIP ne fonctionne pas"**

**Solutions :**
1. **Vérifier la taille** : Le ZIP doit faire < 50 MB (le vôtre fait ~4 MB, OK)
2. **Décompresser et glisser le DOSSIER** (pas le ZIP) directement
3. **Utiliser la CLI Vercel** (voir Option B)

---

### **❓ "Mon site affiche des erreurs 404"**

**Solution :**
- Vérifier que `index.html` est bien à la racine
- Les dossiers `css/`, `js/`, `images/` doivent être à la racine aussi
- Structure correcte :
  ```
  site/
  ├── index.html (PAS site/html/index.html)
  ├── css/
  ├── js/
  └── images/
  ```

---

### **❓ "Le domaine ne se connecte pas"**

**Solutions :**
1. **Attendre 24h** pour la propagation DNS
2. **Vérifier les nameservers** dans votre registrar
3. **Tester avec :** `dig nexia-partners.com` ou `nslookup nexia-partners.com`
4. **Contacter le support Vercel** (très réactif)

---

## 📋 **CHECKLIST COMPLÈTE DE DÉPLOIEMENT**

### **Avant le déploiement :**
- [ ] Tous les fichiers sont prêts (13 HTML + CSS + JS + 12 images)
- [ ] Les liens sont relatifs (pas de chemins absolus)
- [ ] robots.txt et sitemap.xml sont à la racine
- [ ] Logo est bien dans images/logo-nexia-partners.png

### **Déploiement Vercel :**
- [ ] Compte Vercel créé
- [ ] Site uploadé sur Vercel
- [ ] URL .vercel.app fonctionne
- [ ] Site testé (navigation, images, formulaire)

### **Configuration domaine :**
- [ ] Domaine nexia-partners.com acheté
- [ ] DNS configurés (nameservers ou A/CNAME)
- [ ] Propagation DNS terminée (24h max)
- [ ] HTTPS activé automatiquement

### **Post-déploiement :**
- [ ] Sitemap soumis à Google Search Console
- [ ] Google Analytics configuré
- [ ] Test partages sociaux (Open Graph)
- [ ] Test vitesse (PageSpeed Insights)

---

## 💡 **ALTERNATIVE ENCORE PLUS SIMPLE : Netlify**

Si Vercel vous bloque, **Netlify est identique et parfois plus simple** :

### **Déploiement Netlify (Drag & Drop) :**

1. **Aller sur :** https://app.netlify.com/drop
2. **Glisser-déposer** votre dossier de site
3. **C'EST TOUT !** 🎉

**Votre site sera en ligne en 30 secondes sur :** `https://random-name.netlify.app`

### **Avantage Netlify :**
- ✅ Encore plus simple (pas besoin de compte pour tester)
- ✅ Formulaire de contact fonctionne directement (Netlify Forms)
- ✅ 100 GB/mois gratuit
- ✅ Même performance que Vercel

---

## 🎯 **MON CONSEIL FINAL**

### **Option 1 : Si vous êtes à l'aise avec l'informatique**
→ **Vercel** (plus de contrôle, meilleure interface)

### **Option 2 : Si vous voulez le plus simple possible**
→ **Netlify Drop** (https://app.netlify.com/drop)
→ Glisser-déposer, c'est en ligne en 30 secondes !

### **Option 3 : Si vous voulez un support technique**
→ Je peux vous créer un **tutoriel vidéo étape par étape** ou vous guider en direct

---

## 📞 **BESOIN D'AIDE ?**

Je peux vous aider de plusieurs façons :

1. **Créer un package ZIP** prêt à déployer
2. **Guide vidéo** étape par étape avec captures d'écran
3. **Déployer pour vous** si vous me donnez accès temporaire
4. **Session de troubleshooting** si vous rencontrez un problème

**Que préférez-vous ?**

---

## 🚀 **ACTION IMMÉDIATE**

**Voici ce que je vous propose MAINTENANT :**

1. Je crée un **fichier ZIP** de votre site prêt à déployer
2. Vous allez sur **https://app.netlify.com/drop**
3. Vous glissez-déposez le ZIP
4. Votre site est en ligne en 30 secondes !

**Voulez-vous que je prépare le ZIP pour vous ?** ✅

---

**PS :** Ne vous inquiétez pas, c'est BEAUCOUP plus simple que ça en a l'air. Des milliers de personnes déploient leur premier site sur Vercel/Netlify chaque jour, et 99% réussissent du premier coup ! 🎉
