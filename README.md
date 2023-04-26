Installation process.

* Clone the repository
* Install Docker
* Copy the .env.example file to .env
* Composer install
* Generate the application key with the following command:
```
./vendor/bin/sail artisan key:generate
```
* Run the following command in the root directory of the project:
```
./vendor/bin/sail up
```
* Seed the database with the following command:
```
./vendor/bin/sail artisan db:seed
```
* Open the browser and go to http://localhost
* Enjoy!
