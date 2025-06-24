<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🛒 Shoppcie E-commerce Platform

**Status:** 🚧 Under Maintenance — Actively being developed. Core features are functional.

---

## 🧾 Overview

**Shoppcie** is a modern e-commerce platform tailored for computer parts and electronics. Built with Laravel, it features a sleek, dark-themed interface ideal for tech enthusiasts, gamers, and PC builders.

---

## 🔐 Authentication & User Roles

- User registration & login (via Laravel Fortify)
- Role-based access control:
  - **Admin**
  - **Seller**
  - **Customer**
- Account settings & profile management

---

## 🛍️ Product Catalog

- Product listings with images and rich descriptions  
- Category-based browsing  
- Featured products section  

---

## 🧭 Shopping Experience

- Product detail pages  
- Search functionality  
- Fully responsive design for mobile, tablet, and desktop  

---

## 🚧 Features in Progress

### 🛒 Shopping Cart & Checkout
- Cart functionality near completion  
- Payment gateway integration (Coming soon)

### 👤 User Dashboard
- View order history  
- Wishlist functionality  
- Advanced account settings

### 🏪 Seller Portal
- Product and inventory management  
- Order fulfillment tools  
- Basic analytics dashboard

### ⚙️ Admin Panel
- Manage users (customers, sellers)  
- Site-wide statistics  
- Content & category management

---

## 🧰 Tech Stack

- **Backend:** Laravel 12.x  
- **Frontend:** Blade + Bootstrap 5  
- **Authentication:** Laravel Fortify  
- **Database:** MySQL  
- **Assets & Bundler:** Vite

---

## 🚀 Getting Started

### ✅ Prerequisites

- PHP >= 8.2  
- Composer  
- MySQL or MariaDB  
- Node.js & NPM

### 🛠️ Installation Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/TheRealAngelo/ecommerce-shoppcie.git
   cd ecommerce-shoppcie

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
