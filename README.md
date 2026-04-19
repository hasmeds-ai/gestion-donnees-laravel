# Projet Laravel - Gestion des Données

## Description
Application web développée avec Laravel permettant :
- l’enregistrement de données (nom, email, message)
- l’affichage des données
- la génération automatique avec Factory & Seeder

## Technologies
- Laravel
- PHP
- MySQL
- Blade

## Installation
```bash
git clone ...
cd gestion_donnees
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve