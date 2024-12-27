# Task Management System 📌  

A *Laravel-based Task Management application* enhanced with *Livewire* for dynamic user interfaces and efficient task handling. This application allows you to manage tasks seamlessly, offering a clean and modern interface powered by Laravel and Livewire.  

---

## Features  

- *Dynamic UI*: Powered by Livewire for seamless real-time updates.  
- *Task Management*: Add, edit, delete, and track tasks efficiently.  
- *Database Integration*: Manage your tasks with reliable backend storage.  
- *Fully Responsive*: Frontend built using Tailwind CSS for modern designs.  

---

## Prerequisites  

Make sure you have the following installed before setting up the project:  

1. *XAMPP*: Download and install [XAMPP](https://www.apachefriends.org/download.html) to run Apache and MySQL servers.  
2. *Composer*: Download [Composer](https://getcomposer.org/download/) for PHP dependency management.  
3. *PHP*: Ensure PHP version 8.1 or higher is installed on your system.  
4. *Node.js & npm*: Install [Node.js](https://nodejs.org/) and npm to manage frontend assets.  

---

## Installation Steps  

Follow these steps to set up the project locally:  

1. *Clone the Repository*  
   bash  
   git clone https://github.com/sotoJ24/task_management.git  
   cd task_management  
     

2. *Install Laravel Dependencies*  
   bash  
   composer install  
     

3. *Install Livewire (if not already installed)*  
   bash  
   composer require livewire/livewire  
     

4. *Set Up Environment Variables*  
   - Copy the example .env file:  
     bash  
     cp .env.example .env  
       
   - Edit the .env file and configure your database credentials:  
     env  
     DB_CONNECTION=mysql  
     DB_HOST=127.0.0.1  
     DB_PORT=3306  
     DB_DATABASE=task_management  
     DB_USERNAME=root  
     DB_PASSWORD=<your-password>  
       

5. *Generate Application Key*  
   bash  
   php artisan key:generate  
     

6. *Run Database Migrations*  
   bash  
   php artisan migrate  
     

7. *(Optional) Seed Database with Sample Data*  
   Populate your database with demo data:  
   bash  
   php artisan db:seed  
     

8. *Install and Compile Frontend Assets*  
   bash  
   npm install  
   npm run dev  
     

---

## Running the Project  

1. Start the *XAMPP* control panel and ensure *MySQL* and *Apache* servers are running.  
2. Start the Laravel development server:  
   bash  
   php artisan serve  
     
3. Open your browser and navigate to [http://localhost:8000](http://localhost:8000).  

---

## Useful Commands  

Here are some helpful Laravel commands for managing the project:  

- *Clear Laravel Caches*  
   bash  
   php artisan cache:clear  
   php artisan config:clear  
   php artisan route:clear  
   php artisan view:clear  
     

- *Run Laravel Tests*  
   bash  
   php artisan test  
     

- *Compile Assets for Production*  
   bash  
   npm run build  
     

---

## Contributing  

Contributions are welcome! Feel free to fork the repository, submit issues, or create pull requests to improve the project.  

---  

## Resources  

- *Laravel Documentation*: [https://laravel.com/docs](https://laravel.com/docs)  
- *Livewire Documentation*: [https://livewire.laravel.com/docs](https://livewire.laravel.com/docs)  
- *XAMPP Documentation*: [https://www.apachefriends.org](https://www.apachefriends.org)
