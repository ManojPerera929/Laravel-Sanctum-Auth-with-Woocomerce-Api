### Laravel Sanctum Auth with Woocomerce Api


### Requirements

- php 8.1
- Laravel 9
- Mysql




### SET FOLLOWING ENV

```dotenv


#Database Config
DB_CONNECTION = 
DB_HOST = 
DB_PORT=
DB_DATABASE =
DB_USERNAME=
DB_PASSWORD=


#Woocomerce API Settings
WOOCOMMERCE_STORE_URL={{woocomerseApi}}/wp-json/wc/v3/products/
WOOCOMMERCE_CONSUMER_KEY=
WOOCOMMERCE_CONSUMER_SECRET=





```

### SETUP
- composer install

## Commands
- <code>php artisan migrate</code> - Run All Migrations
- <code>php artisan download:products</code> - Download All Products from WooCommerce Api





## Support
- Developed By Manoj Perera
