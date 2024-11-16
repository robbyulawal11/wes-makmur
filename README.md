# Wes Makmur

**Wes Makmur** is an internal catalog website for a traditional herbal medicine company calling jamu. This platform facilitates the management and documentation of products, inventory, and other essential business data. Built using the Laravel framework, Wes Makmur aims to streamline internal operations with an intuitive and efficient interface.

---

## Features
- **Product Catalog**: Manage and display an internal catalog of traditional herbal products.  
- **Inventory Management**: Track and update stock levels seamlessly.  
- **Data Recording**: Record business transactions and important company data.  
- **User Management**: Role-based access control for employees and administrators.  

---

## System Requirements
Ensure your environment meets the following requirements:
- PHP >= 8.0
- Composer >= 2.0
- Laravel >= 9.0
- Node.js >= 16.0 and NPM
- MySQL Database
- A local development server (e.g., XAMPP, Laragon, or Valet)

---

## Installation and Setup Guide

### 1. Clone the Repository
Run the following command to clone the repository:
```bash
git clone https://github.com/robbyulawal11/wes-makmur.git
cd wes-makmur
```

### 2. Install Dependencies
Install the required PHP and JavaScript dependencies:
```bash
composer install
npm install
```

### 3. Configure Environment
Duplicate the `.env.example` file to `.env`:
```bash
cp .env.example .env
```
Update the `.env` file with your database configuration:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 4. Generate Application Key
Run the following command to generate the application key:
```bash
php artisan key:generate
```

### 5. Run Database Migrations
Migrate the database tables and optionally seed data:
```bash
php artisan migrate --seed
```

### 6. Build Frontend Assets
Compile the JavaScript and CSS files:
```bash
npm run dev
```
For production:
```bash
npm run build
```

### 7. Start the Application
Run the Laravel development server:
```bash
php artisan serve
```
---

## Contributing
We welcome contributions to enhance Wes Makmur. Please fork this repository, make your changes, and submit a pull request.

---

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). See the LICENSE file for more information.

---

Thank you for using Wes Makmur!
