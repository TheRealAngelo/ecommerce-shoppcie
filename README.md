<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Shoppcie E-commerce Platform

Status: Under Maintenance - This project is actively being developed, but many core features are working.

Overview
Shoppcie is a modern e-commerce platform built with Laravel, focusing on computer parts and electronics. It features a sleek dark-themed interface designed for tech enthusiasts, gamers, and PC builders.

Registration and login
Role-based access (Admin, Seller, Customer)
Account management
Product Catalog

Product listings with images and descriptions
Category browsing
Featured products section
Shopping Experience

Product details page
Search functionality
Responsive design for all devices
Features Under Development
Shopping Cart & Checkout

Cart functionality is in final stages of development
Payment processing integration coming soon
User Dashboard

Order history
Wishlist functionality
Advanced account settings
Seller Portal

Product management
Order fulfillment
Analytics dashboard
Admin Features

User management
Site-wide statistics
Content management
Tech Stack
Backend: Laravel 12.x
Frontend: Blade templates with Bootstrap 5
Database: MySQL
Authentication: Laravel Fortify
Assets: Vite
Getting Started
Prerequisites
PHP 8.2+
Composer
MySQL/MariaDB
Node.js & NPM

Installation
1. Clone the repository
git clone https://github.com/yourusername/ecommerce-shoppcie.git

2. Install PHP dependencies
composer install

3. Install NPM packages
npm install

4. Copy the environment file and configure your database
cp .env.example .env

5. Generate application key
php artisan key:generate

6. Run migrations and seed the database
php artisan migrate --seed

7. Compile assets
npm run dev

8. Start the development server
php artisan serve

Demo Accounts
For testing purposes, you can use these accounts:

Admin: admin@shoppcie.com / password123
Seller: seller@shoppcie.com / password123
Customer: customer@example.com / password123

Acknowledgements
Laravel
Bootstrap
Font Awesome
Note: This project is for demonstration purposes and is still under active development. Some features may change or be unavailable.