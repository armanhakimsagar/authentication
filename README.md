Active Features :

1. Login system
2. Register System
3. Forgot Password
4. Professional admin panel dashborad
5. searchbar
6. notificaton
7. social media panel




For use :


1. composer require "arman/authentication @dev"

2. in confiq/app.php :

	'providers' => [

		arman\authentication\billingSoftwareProvider::class,

	]

3. composer.json
[
  "autoload": {
	"classmap": [
		"database"
	],
	"psr-4": {
		"App\\": "app/",
		"arman\\authentication\\": "vendor/arman/authentication/src"
	}
  },

]


4. php artisan vendor:publish --tag=arman_authentication --force 

5. in route add :

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

6. add username , password & database in .env

7. in confiq/app/AppServiceProvider.php :

	use Illuminate\Support\Facades\Schema;
	
	public function boot()
    {
       Schema::defaultStringLength(191);
    }

8. php artisan migrate

http://localhost/authentication/public
