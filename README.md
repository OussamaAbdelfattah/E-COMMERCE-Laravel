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

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 58 51" src="https://github.com/user-attachments/assets/f1aaa2cf-8f6a-44c9-847c-cb98671be50a" />

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 59 01" src="https://github.com/user-attachments/assets/10e4c3b6-6afc-434d-9e48-23baebc96295" />

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 56 55" src="https://github.com/user-attachments/assets/c16c6006-3a8f-4bcb-baa1-02d9ab1feae8" />

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 57 43" src="https://github.com/user-attachments/assets/c20b735b-7201-49b8-ac0a-84f157c8a886" />

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 58 08" src="https://github.com/user-attachments/assets/d516c582-aa31-4150-af3a-899c2c273314" />

<img width="1680" alt="Capture d’écran 2025-03-13 à 20 58 18" src="https://github.com/user-attachments/assets/65034f3f-24bc-47d0-8694-f4e9143e3602" />

#### Panier
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 00 27" src="https://github.com/user-attachments/assets/a3e39db4-f0f1-4d80-bd54-69d93ad6b889" />


### Interface Admin
#### Tableau de bord
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 01 01" src="https://github.com/user-attachments/assets/e0cff9bb-e527-4e6a-b8fb-eb7cc7ccabe0" />


#### Gestion des produits
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 01 12" src="https://github.com/user-attachments/assets/35e194c1-3859-48b4-9420-c5e87e22cfe2" />
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 01 25" src="https://github.com/user-attachments/assets/04bc7598-ed07-4aae-8174-3e15eeaefdd6" />

#### Gestion des catégories 
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 02 00" src="https://github.com/user-attachments/assets/3ac69155-ec27-483d-91e9-edf3c44866fe" />

#### Gestion des commandes
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 02 46" src="https://github.com/user-attachments/assets/886ee775-8a5f-4d64-a1d0-23e4942ba76c" />
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 05 39" src="https://github.com/user-attachments/assets/2866e2c0-f4ae-446a-81f8-62acd878e5ac" />
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 07 08" src="https://github.com/user-attachments/assets/d4e8e5a3-f0fa-41e3-93f2-59bc2428fede" />


#### Gestion des utilisateurs
<img width="1680" alt="Capture d’écran 2025-03-13 à 21 03 02" src="https://github.com/user-attachments/assets/d2c6e81e-d597-4776-b549-3a849ad15748" />




## Installation
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/mon-site-web.git
