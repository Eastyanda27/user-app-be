# User API Backend – Laravel 12

A RESTful API built with Laravel 12 for user registration, login, profile update (including avatar upload), password reset, user listing, search, and detail view.

## ✅ Requirements

- PHP 8.1 or later
- Composer
- Laravel 12
- MySQL or PostgreSQL
- [Optional] Laravel Storage: Symbolic link to `public/storage`

## 🚀 Getting Started

1. **Clone Repository**
   ```bash
   git clone https://github.com/your-username/user-backend.git
   cd user-backend
Install Dependencies

bash
Copy
Edit
composer install
Copy .env File

bash
Copy
Edit
cp .env.example .env
Configure Database

Edit .env and set your DB credentials:

makefile
Copy
Edit
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=
Run Migrations & Seeder (if any)

bash
Copy
Edit
php artisan migrate
php artisan db:seed
Create Storage Link (for avatar)

bash
Copy
Edit
php artisan storage:link
Run Laravel Server

bash
Copy
Edit
php artisan serve
By default it runs at: http://localhost:8000

🔑 API Endpoints
Method	Endpoint	Description
POST	/api/register	Register new user
POST	/api/login	Login and get token
GET	/api/user	Get current user
POST	/api/user?_method=PUT	Update user (name, password, avatar)
GET	/api/users	List/search users
GET	/api/users/{id}	Get user detail
POST	/api/forgot-password	Send reset email (if implemented)

🔐 Authentication
Uses Laravel Sanctum for API token

Include token in headers:

makefile
Copy
Edit
Authorization: Bearer <your_token>
📂 Folder Structure
app/Models/User.php: User model

routes/api.php: API routes

storage/app/public/avatars/: Uploaded avatar files