What to do after cloning a laravel project:

clone the project
in the project folder:

1. composer install
2. copy .env.example and rename to .env
3. database aanmaken
4. add your personal (database) data to .env
5. php artisan key:generate
6. php artisan migrate --seed
