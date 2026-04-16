# Medical Office Management Platform

Professional healthcare management system developed during internship. Full-stack web application for managing medical clinics, patient records, appointments, and billing workflows.

## 🏥 Features

- **Patient Management:** Complete CRUD operations for patient records and medical history
- **Appointment Scheduling:** Interactive booking system for doctor-patient appointments  
- **Billing & Invoicing:** Automated invoice generation and payment tracking
- **Role-Based Access:** Multi-level authentication (Admin, Doctor, Receptionist, Patient)
- **Medical Records:** Digital health records with consultation history
- **Dashboard:** Visual statistics for clinic operations
- **Responsive Design:** Mobile-friendly interface using Bootstrap

## 🛠️ Tech Stack

- **Backend:** PHP 8.x, Laravel 10.x, MVC Architecture
- **Frontend:** JavaScript, Blade Templates, Bootstrap 5, Vite
- **Database:** MySQL with Eloquent ORM
- **Authentication:** Laravel built-in auth with Bcrypt hashing
- **Tools:** Composer, NPM, Git

## ⚙️ Prerequisites

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM
- XAMPP/WAMP (recommended)

## 🚀 Installation

1. **Clone repository**
   ```bash
   git clone https://github.com/Zahra-NAMAOUI/medical-office-management.git
   cd medical-office-management
2. **Install PHP dependencies**
   ```bash
   composer install
3. **Install JavaScript dependencies**
   ```bash
   npm install
4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
5. **Database configuration**
   - Create MySQL database: medical_office
   - Update .env:
   ```bash
   DB_DATABASE=medical_office
   DB_USERNAME=root
   DB_PASSWORD=  
6. **Run migrations**
   ```bash
   php artisan migrate
   php artisan db:seed
6. **Start application**
   ```bash
   php artisan serve
   npm run dev
Access: http://localhost:8000


## 📁 Project Structure
app/
├── Http/Controllers/      # Business logic
├── Models/                # Eloquent models
database/
├── migrations/            # Database schema
├── seeders/               # Sample data
resources/
├── views/                 # Blade templates
├── css/                   # Stylesheets
└── js/                    # JavaScript
routes/
├── web.php                # Web routes
tests/                     # Feature/Unit tests

## 🎯 Technical Highlights

**MVC Pattern:** Clean architecture with Laravel framework
**Eloquent ORM:** Database relationships (Patients ↔ Appointments ↔ Doctors)
**Form Validation:** Server-side input validation
**Database Migrations:** Version-controlled schema
**Middleware:** Role-based access control


## 📋 Project Info

**Developer:** Fatimazahra Namaoui
**Type:** Internship Project (PFA)
**Duration:** March - April 2024
**Institution:** ISTA NTIC Béni Mellal

## 📄 License
Developed for educational and internship purposes.

## 📫 Contact
**LinkedIn:** linkedin.com/in/fz-namaoui
**Email:** fatimazahranamaoui90@gmail.com

## Built with Laravel & MySQL

**After creating both files**, run these commands to push them:

```bash
git add .
git commit -m "feat: add README and gitignore"
git push origin main
