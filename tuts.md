# make a built in auth

php artisan make:auth

# add database credential

open .env file and give database credential

# to database migrate

php artisan migrate

# for max length email in case of you are getting error 
add schema default string length app service provider
Schema::defaultStringLength(191);

#  to create a model along with migration
php artisan make:model <modelname> -m

# you have to use csrf field inside form
{{csrf_field()}}

# add guarded property inside model
# add relationship inside model