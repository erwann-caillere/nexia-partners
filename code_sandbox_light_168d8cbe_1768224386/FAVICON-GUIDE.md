# 🎨 Guide Création Favicon - Nexia Partners

## Instructions pour Créer un Favicon

### Option 1 : Utiliser le Logo Existant (Recommandé)

Le fichier `images/logo-nexia-partners.png` peut servir de favicon temporaire.

### Option 2 : Créer des Favicons Optimisés

Pour créer des favicons aux bonnes dimensions, utilisez un outil en ligne comme **[Favicon.io](https://favicon.io/)** ou **[RealFaviconGenerator](https://realfavicongenerator.net/)**.

#### Étapes :
1. Télécharger `images/logo-nexia-partners.png`
2. Aller sur https://favicon.io/favicon-converter/
3. Uploader l'image
4. Télécharger le package de favicons généré
5. Placer les fichiers dans le dossier `images/`

#### Dimensions Recommandées :
- **16x16** : favicon.ico (classique)
- **32x32** : favicon-32x32.png
- **180x180** : apple-touch-icon.png (iOS)
- **192x192** : android-chrome-192x192.png
- **512x512** : android-chrome-512x512.png

### Option 3 : Utiliser l'Emoji/Cercle

Créer un simple cercle avec les couleurs Nexia Partners (#f2994a et #0d3b66) comme favicon minimaliste.

---

## Balises HTML à Ajouter (une fois favicons créés)

```html
<!-- Favicons -->
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="manifest" href="images/site.webmanifest">
```

---

## Solution Temporaire Actuelle

Actuellement, le site utilise :
```html
<link rel="icon" type="image/png" href="images/logo-nexia-partners.png">
```

Cela fonctionne mais n'est pas optimal en termes de taille et résolution.

---

**Action recommandée :** Créer des favicons optimisés avec Favicon.io après le déploiement du site.
