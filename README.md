# Finance App

## Purpose
A multi-tenant finance management application for companies to track daily operating costs, monitor expenses and income, and calculate real-time operational costs and profit/loss. Each company (tenant) has isolated data and can view their financial health and "safe to spend" amount for the current day.

## Tech Stack
- **Backend:** Laravel 12 (API)
- **Frontend:** Vue.js (SPA, via Laravel Breeze)
- **Multi-Tenancy:** [stancl/tenancy](https://tenancyforlaravel.com/) (subdomain-based)
- **Database:** MySQL (default: `hub_db`)

## Features
- Multi-tenant: Each company has its own subdomain and isolated data
- User authentication (Laravel Breeze + Sanctum)
- Track daily expenses and income
- Real-time calculation of daily operational cost and profit/loss
- Vue.js SPA frontend

## Setup Instructions

### 1. Clone the repository
```
git clone <repo-url>
cd finance-app
```

### 2. Install PHP dependencies
```
composer install
```

### 3. Install Node.js dependencies
```
npm install
```

### 4. Environment setup
- Copy `.env.example` to `.env`
- Set your database credentials (default: MySQL, database `hub_db`)
- Set up mail and other environment variables as needed

### 5. Generate application key
```
php artisan key:generate
```

### 6. Create the database
```
# Example for MySQL
mysql -u root -p -e "CREATE DATABASE hub_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

### 7. Run migrations
```
php artisan migrate
```

### 8. Build frontend assets
```
npm run build
```

### 9. Install and configure Tenancy for Laravel
- Tenancy is already installed. Configure subdomain routing and tenant creation as needed.
- Add subdomains to your `/etc/hosts` for local testing (e.g., `company1.localhost`).

### 10. Serve the application
```
php artisan serve --host=localhost
```

Visit your app at `http://company1.localhost:8000` (after tenant creation and hosts file update).

## Multi-Tenancy Notes
- Tenants are companies, each with their own subdomain (e.g., `company1.localhost`).
- All financial data is isolated per tenant.
- Use the Laravel admin or CLI to create new tenants.

## License
MIT
