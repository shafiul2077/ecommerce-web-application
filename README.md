# ecommerce-web-application
## About Ecommerce-web-application
This web application is helpful for customers and owners. The owner can easily control this web application from any device, and customers can easily track their product from the web application. Any customer can buy any legal product through this web application from anywhere. The owner and registered employee can sell any legal products. The owner can hire any employers to maintain this web application. The registered people can buy and view any product. But unregistered people can only view any product if they want to buy, must be registration completed first


## How to Setup
<li>At the first clone our project</li>
<li>Go to the folder application using cd command on your cmd or terminal</li>
<li>Run composer install on your cmd or terminal</li>
<li>Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu</li>
<li>Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.</li>
<li>Run php artisan key:generate</li>
<li>php artisan migrate</li>
<li>php artisan serve</li>

## User Registration
Any user can register as a customer can log in to buy any product from the application.

### Admin login
You need to open the user table to the SQL database for admin login and change user type 0 to 1.


