# GESTION DES RESSOURCES HUMAINES (GESTIONRH)

Projet d'application web de gestion des ressources humaines développé avec **Laravel**, **Livewire** et le template **AdminLTE**.

---

## 🚀 Fonctionnalités principales

L'application intègre un système d'authentification robuste avec une gestion des accès basée sur les rôles (**Admin**, **Manager**, **Assistant**).

### Rôles et Autorisations

#### 👑 Administrateur (Admin)
* Accès complet à l'ensemble de l'application grâce au contournement via `Gate::before`.
* Supervision et administration globale.

#### 💼 Manager
* **Gestion des comptes** : Création, modification et consultation des comptes utilisateurs de l'application.
* **Gestion des affectations** : Consultation de l'historique complet et détaillé des affectations des employés à travers les succursales, départements et services.

#### 🤝 Assistant
* **Gestion des employés** : Création, modification, consultation et gestion des dossiers des employés.
* **Blacklist** : Possibilité de mettre certains employés sur liste noire.
* **Gestion des structures** :
  * **Succursales** : Gestion des différents bureaux ou agences.
  * **Départements** : Structuration interne par pôle d'activité.
  * **Services** : Gestion fine des services affectés aux départements.
* **Gestion des fonctions** : Définition et attribution des postes et fonctions occupés.

---

## 🛠️ Stack Technique

* **Framework Backend** : Laravel v8.x
* **Composants Dynamiques** : Livewire v2.x
* **Template Admin** : AdminLTE v3.2 & Bootstrap v4.6
* **Gestion des Actifs** : Laravel Mix v6 (Webpack)
* **Base de données** : MySQL

---

## 💻 Installation et Configuration

Suivez les étapes ci-dessous pour installer le projet localement :

### 1. Prérequis
Assurez-vous d'avoir installé sur votre machine :
* PHP (version >= 7.3 ou >= 8.0)
* Composer
* Node.js & NPM
* MySQL

### 2. Cloner le projet
```bash
git clone <repository-url>
cd rh
```

### 3. Configurer l'environnement
Copiez le fichier `.env.example` en `.env` :
```bash
cp .env.example .env
```
Ouvrez le fichier `.env` et configurez vos accès à la base de données MySQL :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_rh
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

### 4. Installer les dépendances PHP et Node.js
```bash
# Dépendances Backend
composer install

# Dépendances Frontend
npm install
```

### 5. Générer la clé d'application
```bash
php artisan key:generate
```

### 6. Migrations et Seeders
Créez la base de données configurée dans le fichier `.env` puis lancez les migrations et les seeders pour pré-remplir les données de rôles, fonctions, communes et comptes par défaut :
```bash
php artisan migrate --seed
```

### 7. Compiler les assets
```bash
npm run dev
```

### 8. Lancer le serveur de développement
```bash
php artisan serve
```
L'application sera accessible sur `http://127.0.0.1:8000`.

---

## 🔑 Comptes de Test par défaut

Voici les identifiants configurés par défaut dans les seeders pour tester l'application avec différents rôles :

| Nom complet | Email | Mot de passe | Rôle(s) attribué(s) |
| :--- | :--- | :--- | :--- |
| **Angui Jathniel** | `achijathniel@gmail.com` | `gracenebie@9419` | **Admin** |
| **Achi Grace** | `grachi@gmail.com` | `gracenebie@9419` | **Manager** et **Assistant** |
| **Kone Daniel** | `daniel@gmail.com` | `gracenebie@9419` | **Manager** |
