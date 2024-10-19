//*********BASICS**********
-> how to initialize a laravel project 
    composer create-project laravel/laravel name-of-project
    cd name-of-project
    php artisan server

-> how to make a controller:
    php artisan make:controller HomeController
    => u ll find the controller in " app/http/controllers/ "


//*********CRUD**************
->how to make a database table
    1. create a db (with the same name as db in .env)
    2. run the following command in terminal (product is just an exemple of a table)
     php artisan make:model Product -m
     => u ll find the model in " app/Models/ "
    3.  adjust ur table in database/migrations
    4. run the following command in terminal
     php artisan migrate


