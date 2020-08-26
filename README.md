# Laravel-Projects-MyPost
A website to share posts/stories/status 

#credit to Traversy Media for this tutorial

MyPost Web


Requirement
------------
Composer
XAMMP (or whatever sql server)

Steps
-----------
Clone .git

Run composer install

Duplicate .env.example and rename to .env

Run php artisan key:generate

Setting database connection inside .env

Run php artisan migrate --seed

Run php artisan storage:link

Run php artisan serve
