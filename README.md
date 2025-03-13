# E_COMMERCE

## Description du projet
Ce projet est un site web complet avec une interface utilisateur et une interface d'administration. Il inclut les fonctionnalités suivantes :
- **Module de connexion et d'inscription** pour les utilisateurs.
- **Gestion du panier** basée sur les sessions pour les utilisateurs connectés.
- **Interface Admin** avec un tableau de bord complet et des fonctionnalités de gestion avancées.
- **Intégration d'API IA** pour générer des descriptions et des images de produits.

## Technologies utilisées
- **Frontend** : HTML, CSS, JavaScript, Bootstrap
- **Backend** : PHP, Laravel
- **Base de données** : MySQL
- **API IA** : Gemini (pour la génération de texte), Hugging Face (pour la génération d'images)

## Fonctionnalités principales

### Interface Utilisateur
1. **Connexion et Inscription** :
   - Les utilisateurs peuvent créer un compte et se connecter.
   - Le panier est géré via des sessions pour chaque utilisateur connecté.

2. **Page d'accueil** :
   - **Billboard** : Section mise en avant pour les produits phares.
   - **Best Selling Items** : Produits les plus vendus.
   - **Limited Offer** : Offres spéciales et produits en promotion.
   - **Catégories** : Affichage des produits par catégorie.
   - **Customer Reviews** : Avis des clients.

3. **Page de contact** :
   - Formulaire de contact avec validation.

### Interface Admin
1. **Tableau de bord** :
   - Affichage des statistiques : nombre de produits disponibles, catégories et commandes.
   - **Derniers utilisateurs ajoutés** : Tableau des 5 derniers utilisateurs.
   - **Derniers produits ajoutés** : Tableau des 5 derniers produits.
   - **Dernières commandes** : Tableau des 5 dernières commandes.

2. **Gestion des utilisateurs** :
   - **Index** : Liste des utilisateurs avec actions (modifier, supprimer, afficher les détails).
   - **Ajouter** : Formulaire pour ajouter un nouvel utilisateur.

3. **Gestion des produits** :
   - **Index** : Liste des produits avec actions (modifier, supprimer, afficher les détails).
   - **Ajouter** : Formulaire pour ajouter un nouveau produit avec :
     - **Génération de description par IA** : Bouton pour générer une description via l'API Gemini.
     - **Génération d'image par IA** : Bouton pour générer une image via Hugging Face.

4. **Gestion des catégories** :
   - **Index** : Liste des catégories avec actions (modifier, supprimer, afficher les détails).
   - **Ajouter** : Formulaire pour ajouter une nouvelle catégorie.

5. **Gestion des commandes** :
   - **Index** : Liste des commandes avec actions (modifier, supprimer, afficher les détails).
   - **Ajouter** : Formulaire pour ajouter une nouvelle commande.

## Captures d'écran

### Interface Utilisateur
#### Page d'accueil
![Page d'accueil](screenshots/home.png)

#### Panier
![Panier](screenshots/cart.png)

### Interface Admin
#### Tableau de bord
![Tableau de bord](screenshots/admin_dashboard.png)

#### Gestion des produits
![Gestion des produits](screenshots/admin_products.png)

#### Ajout de produit avec IA
![Ajout de produit avec IA](screenshots/admin_add_product.png)

## Installation
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/mon-site-web.git
