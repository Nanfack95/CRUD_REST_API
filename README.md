# CRUD_REST_API

📝 Documentation de l'API REST CRUD avec Laravel
Ce projet est une API RESTful construite avec Laravel permettant de gérer [Nom de la ressource principale, ex: "Articles", "Utilisateurs", "Produits"] via des opérations CRUD (Create, Read, Update, Delete).

🚀 Fonctionnalités
✔️ CRUD complet (Create, Read, Update, Delete)
✔️ Validation des données côté serveur
✔️ Réponses JSON structurées (succès/erreur)

🔧 Prérequis & Installation
1. Environnement requis
PHP 8.0+

Composer 2.0+

MySQL 5.7+ / PostgreSQL / SQLite

Laravel 10.x

2. Installation

# Cloner le dépôt
git clone https://github.com/Nanfack95/CRUD_REST_API.git

# Installer les dépendances
composer install

# Copier le fichier .env et configurer la BDD
cp  .env

# Générer une clé d'application
php artisan key:generate

# Lancer les migrations et seeders (si nécessaire)
php artisan migrate --seed

# Démarrer le serveur (local)
php artisan serve

# Accéder à l'API
http://localhost:8000/api/


🔗 Endpoints de l'API
📌 [articles] NB: les articles sont liés aux sous catégories et  aux catégories

| Méthode | Endpoint | Description |
|---------|----------|-------------|
| GET     | /api/articles | Lister toutes les articles (paginated) |
| GET     | /api/articles/{id} | Récupérer une article par ID |
| POST    | /api/articles | Créer une nouvelle article |
| PUT     | /api/articles/{id} | Mettre à jour une article |
| DELETE  | /api/articles/{id} | Supprimer une article |

📌 [scategories] NB: les sous catégories sont liées aux catégories

| Méthode | Endpoint | Description |
|---------|----------|-------------|
| GET     | /api/scategories | Lister toutes les sous catégories (paginated) |
| GET     | /api/scategories/{id} | Récupérer une sous catégorie par ID |
| POST    | /api/scategories | Créer une nouvelle sous catégorie |
| PUT     | /api/scategories/{id} | Mettre à jour une sous catégorie |
| DELETE  | /api/scategories/{id} | Supprimer une sous catégorie |

📌 [categories] NB: les catégories sont liées aux sous catégories

| Méthode | Endpoint | Description |
|---------|----------|-------------|
| GET     | /api/categories | Lister toutes les catégories (paginated) |
| GET     | /api/categories/{id} | Récupérer une catégorie par ID |
| POST    | /api/categories | Créer une nouvelle catégorie |
| PUT     | /api/categories/{id} | Mettre à jour une catégorie |
| DELETE  | /api/categories/{id} | Supprimer une catégorie |

📂 Structure du Projet

├── .env
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── README.md
├── artisan
├── bootstrap
├── config
├── database
├── node_modules
├── package.json
├── public
├── resources
├── routes
├── storage
├── vendor

📧 Contact
Auteur: [Nanfack95](https://github.com/Nanfack95)

Email: [nanfackjospinduclair@gmail.com](mailto:nanfackjospinduclair@gmail.com)

GitHub: [Nanfack95](https://github.com/Nanfack95)

🛠️ Contributions bienvenues !
Si vous souhaitez améliorer ce projet, ouvrez une issue ou une pull request.

🚀 Happy Coding!