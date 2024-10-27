# HOW TO START THE PROJECT

1. Clone this repo
2. uncomment .env and set to this setting

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=windows_explorer
    DB_USERNAME=root
    DB_PASSWORD=
   
3. run this command : php artisan migrate:refresh --seed
4. npm install
5. npm run dev
6. php artisan serve

