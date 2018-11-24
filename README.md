# Lara-Pjax
Laravel + Pjax

# About
Many people looking tutorial for Laravel with PJAX, so i made this!

# Installation This Repo
1. Clone / Fork This Repository
2. Open and type ```cp .env.example .env``` in your terminal
3. Open and type ```composer install``` in your terminal
4. Open and type ```php artisan key:generate``` in your terminal
5. Open and type ```php artisan serve``` in your terminal to open the web

# Installation PJAX
What you need is 
1. Laravel 5+
2. JQuery (You can get the cdn in https://cdnjs.com/libraries/jquery)
3. JQuery PJAX (You can get the cdn in https://cdnjs.com/libraries/jquery.pjax)

Step By Step
1. Open your laravel folder and add ```"jacobbennett/pjax": "~1.0"``` to your composer.json
2. And Composer Update
3. After that, Add ```'JacobBennett\Pjax\PjaxMiddleware'``` to ```$middleware``` in ```app/Http/Kernel.php```
4. And For The Example For How To Use the PJAX, Please follow the ```Guide Of Installation This Repo``` You can look at ```resources/views/layout.blade.php```
