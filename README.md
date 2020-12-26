**Bước 1:**
```
php artisan voyager:install
```
**Bước 2:**
```
php artisan voyager:admin your@email.com
```
**Bước 3:**
```
php artisan vendor:publish --provider="TCG\Voyager\VoyagerServiceProvider"
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"
```
**Bước 4:**
```
php artisan migrate
```
**Bước 5:**
```
php artisan db:seed --class=VoyagerDatabaseSeeder
```
**Bước 6:**
```
php artisan hook:setup
```
**Bước 7:**
```
php artisan storage:link
```
**Bước 8:**
```
composer dump-autoload
```
**Bước 8:**
```
Go to http://localhost:8000/admin/
```