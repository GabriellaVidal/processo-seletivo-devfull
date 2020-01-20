# rits

php artisan storage:link
php artisan make:seeder ContactsTableSeeder
php artisan make:seeder UsersTableSeeder
php artisan make:migration create_files_table
php artisan make:migration create_contacts_table


adminLTE 2
 "jeroennoten/laravel-adminlte": "v1.26.0" para laravel 5.4
 php artisan make:adminlte
//php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=config
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=views