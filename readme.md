## Simple Laravel 5.1 Example

This is a simple Laravel 5.1 Application

Designed to provide a quickstart usage for people looking to learn the foundations of the framework.

Originally created for demo at Tulsa Tech Fest


## Tutorial 

### Step 1: Simple Project Setup

If you are following along with this as a tutorial (instead of using this github branch) you'll want to create a new project.

Process on Mac Yosemite (though most OS should be similar)

1. Install Composer if you haven't already https://getcomposer.org/doc/00-intro.md BE SURE TO INSTALL IT GLOBALLY!
2. In terminal run composer global require "laravel/installer=~1.1"
3. Change to the directory you'd like to create the folder for the project in e.g., cd ~/Web (tip, on Mac you can drag the folder into terminal to get the path)
4. Run laravel new simple-laravel-5 (feel free to replace simple-laravel-5 with whatever name you want)
5. If you're having problems try adding an alias for Laravel using sudo nano ~/.bash_profile then add alias laravel='~/.composer/vendor/bin/laravel' or follow instructions here 
6. Rename .env.example to .env
7. Generate an application key php artisan key:generate
8. Serve your application from php artisan serve (if you need custom port you can add --port=8080) This uses the server that comes with PHP. PHP is installed on recent Macs by default. You may need to install on other systems. Feel free to use MAMP or alternative server if it's convenient.
9. For simplicity change database to sqlite /config/database.php 'default' => env('DB_CONNECTION', 'mysql'),     'default' => env('DB_CONNECTION', 'sqlite')
10. Create empty file storage/database.sqlite
11. Run php artisan migrate


## Initializing This Project
