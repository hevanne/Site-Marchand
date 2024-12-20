# Site-Marchand

## Description

Site-Marchand est un site web marchand permettant la gestion d'articles et d'utilisateurs, avec un système de connexion utilisateur. Ce projet a été développé avec PHP et utilise une base de données PostGreSQL.

## Fonctionnalités

- Gestion des articles (création, affichage, etc.)
- Gestion des utilisateurs
- Connexion et déconnexion
- Affichage d'articles et d'utilisateurs via des pages web
- Images liées aux articles

## Structure du projet

- `app/views/` : Contient les vues du projet (fichiers PHP).
  - `article/` : Vues pour la gestion des articles.
  - `user/` : Vues pour la gestion des utilisateurs.
  - `_template/` : Contient les éléments communs aux pages (header, footer, etc.).
- `public/` : Contient les fichiers accessibles publiquement.
  - `index.php` : Page d'accueil du site.
  - `login.php` : Page de connexion des utilisateurs.
  - `articles.php` : Liste des articles.
- `bd/` : Contient les fichiers SQL pour l'initialisation de la base de données.
  - `init.sql` : Script pour créer et initialiser les tables de la base de données.
- `config/` : Contient les fichiers de configuration du site.

## Prérequis

- Serveur web avec PHP (ex. Apache)
- Base de données PostGreSQL
- PHP 7.4 ou plus récent
- Composer (si des dépendances PHP sont utilisées)

## Installation

1. Clonez ce dépôt dans votre répertoire local :
   ```bash
   git clone https://github.com/votre-utilisateur/site-marchand.git
   ```

2. Configurez la base de données PostGreSQL en utilisant les scripts SQL disponibles dans le dossier `bd/` :
   - `bd/init.sql`

3. Configurez le fichier de configuration dans `config/config.php` en renseignant les informations de connexion à la base de données.

4. Démarrez le serveur web local en utilisant l'un des scripts :
   - Pour Windows : `start.bat`
   - Pour Linux/MacOS : `start.sh`

## Utilisation

- Rendez-vous sur `http://localhost/public/index.php` pour accéder à la page d'accueil du site.
- Utilisez `http://localhost/public/login.php` pour vous connecter.
- Gérez les articles via `http://localhost/public/articles.php`.

## Auteur

Développé par Evan Cnaepelnickx.  
Sur base de projet de [M. Salim Khraimeche](https://www.github.com/salimkhr) dans le cadre scolaire.

Ce projet n'est pas complètement terminé, des bugs ou des parties manquantes peuvent être présents.
