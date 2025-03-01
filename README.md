# UGHS High School Management System

UGHS is a high school management system designed to simplify school administration and activities using the power of the internet and connectivity.

## Features
- **Super Admin**: Manage all schools, create/edit/delete schools, and set the school of operation.
- **Admin**: Manage school settings, class groups, classes, sections, subjects, academic years, students, teachers, timetables, syllabi, and semesters.
- **Teachers**: Manage syllabi and timetables.

## Requirements
- PHP 8.1 or higher
- Composer
- Node.js (for asset bundling)
- Laravel 9 (check [official requirements](https://laravel.com/docs/9.x/upgrade#updating-dependencies))

## Installation
1. Clone the repository:
   \\\ash
   git clone https://github.com/Wetende/ughs ./ughs
   \\\
2. Navigate to the project directory:
   \\\ash
   cd ughs
   \\\
3. Install Composer dependencies:
   \\\ash
   composer install
   \\\
4. Copy the .env.example file to .env and configure it:
   \\\ash
   cp .env.example .env
   \\\
5. Install Node dependencies:
   \\\ash
   npm install
   \\\
6. Build assets:
   \\\ash
   npm run build
   \\\
7. Generate an encryption key:
   \\\ash
   php artisan key:generate
   \\\
8. Migrate the database:
   \\\ash
   php artisan migrate
   \\\
9. Seed the database:
   - For production:
     \\\ash
     php artisan db:seed --class RunInProductionSeeder
     \\\
   - For development/testing:
     \\\ash
     php artisan db:seed
     \\\
10. Start the development server:
    \\\ash
    php artisan serve
    \\\

## Usage
1. Log in with the default credentials:
   - Email: super@admin.com
   - Password: password
2. Change your password in the profile page.
3. Set up your school:
   - Create a school with a name, address, and initial.
   - Set the school as the current school.
4. Add class groups, classes, sections, students, teachers, and subjects.
5. Set academic years and semesters.

## Updating
To update UGHS:
1. Pull the latest changes:
   \\\ash
   git pull origin main
   \\\
2. Update Composer dependencies:
   \\\ash
   composer update
   \\\
3. Clear cache:
   \\\ash
   php artisan optimize:clear
   \\\
4. Migrate the database (backup first):
   \\\ash
   php artisan migrate
   \\\
5. Seed the database for production:
   \\\ash
   php artisan db:seed --class RunInProductionSeeder
   \\\

## Support
If you like this project, consider supporting or contributing to its development.

---


