# Task Management

This is a Laravel-based Task Management application enhanced with Livewire for dynamic user interfaces. Follow the instructions below to set up the project locally.

---

## Prerequisites

1. **XAMPP**: Install [XAMPP](https://www.apachefriends.org/download.html) for running Apache and MySQL.  
2. **Composer**: Ensure you have [Composer](https://getcomposer.org/download/) installed for dependency management.  
3. **PHP**: Required PHP version (ensure compatibility with Laravel).  
4. **Node.js & NPM**: For managing frontend assets (e.g., Tailwind CSS, JavaScript).  

---

## Installation Steps

1. Clone the repository:  
   ```bash
   git clone <repository-url>
   cd Task_Management
   ```

2. Install Laravel dependencies:  
   ```bash
   composer install
   ```

3. Install Livewire (if not already installed):  
   ```bash
   composer require livewire/livewire
   ```

4. Set up the environment variables:  
   - Copy the `.env.example` file to `.env`:  
     ```bash
     cp .env.example .env
     ```
   - Open `.env` and configure your database credentials:  
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=task_management
     DB_USERNAME=root
     DB_PASSWORD=<your-password>
     ```

5. Generate an application key:  
   ```bash
   php artisan key:generate
   ```

6. Run migrations to create database tables:  
   ```bash
   php artisan migrate
   ```

7. (Optional) Seed the database with sample data:  
   ```bash
   php artisan db:seed
   ```

8. Install and compile frontend dependencies:  
   ```bash
   npm install
   npm run dev
   ```

---

## Running the Project

1. Start the XAMPP control panel and ensure MySQL and Apache servers are running.  
2. Start the development server:  
   ```bash
   php artisan serve
   ```
3. Open your browser and navigate to `http://localhost:8000`.

---

## Additional Commands

- **Clear Laravel caches**:  
  ```bash
  php artisan cache:clear
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear
  ```

- **Run Laravel tests**:  
  ```bash
  php artisan test
  ```

- **Compile assets for production**:  
  ```bash
  npm run build
  ```

