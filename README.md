Steps to install Laravel:
1. Install laravel from compsoer
2. Make the env by cp .env.env.example
3. Generate the key by php artisan generate:key
4. Install breeze by running php artisan breeze:install
5. Run npm install && npm run dev

Steps to install the Laratrust:
1. composer require santigarcor/laratrust
2. php artisan vendor:publish --tag="laratrust"
3. php artisan laratrust:setup
4. php artisan laratrust:seeder
5. php artisan vendor:publish --tag="laratrust-seeder"
6. composer dump-autoload
7. paste $this->call(LaratrustSeeder::class) to seeder in database folder
8. php artisan migrate
9. php artisan db:seed
