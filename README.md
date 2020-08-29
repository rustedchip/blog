# Blog
### Quick & Easy Blog with Laravel Voyager at the Backend and Default Bootrap at the Frontend.

* [Laravel 7](https://laravel.com/docs/7.x)
* [Voyager](https://voyager-docs.devdojo.com/)
* [Bootstrap 4](https://getbootstrap.com/docs/4.5/getting-started/introduction/)

#### HOME
![home-preview](/blog-preview/home.png "home-preview")

#### POST
![post-preview](/blog-preview/post.png "post-preview")

#### MOBILE
![mobile-preview](/blog-preview/mobile.png "mobile-preview")

#### ADMIN
![admin-preview](/blog-preview/admin.png "admin-preview")

### Intallation

* Clone Project
* Create your .env and add Database Credentials first to prevent errors during Voyager Install
* Install & Update Composer
* Install Voyager with Dummy Information **php artisan voyager:install --with-dummy** to run migrations and create the basic menus to add blogs and categories
* Run migragtions if is necessary 

### Blog Config
* Blog name can be changed on Voyager Site Settings
* Style, well it is boostrap play with it.

### Possible Problems

Images not displaying?  
**Make sure that your .env file has the right APP_URL=http://localhost:8000 where you are testing or deploying.**
**Make sure that your server has the right permission on public/storage**


    








