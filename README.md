# CertAlert
Laravel Site to Track / Notify for SSL Cert Renewals  
  
  
git clone https://github.com/ebarras/CertAlert.git && cd CertAlert  
composer install  
mysql -uroot -e "create database certalert"  
cp .env.example .env  
php artisan key:generate  
sed -i 's/DB_DATABASE=homestead/DB_DATABASE=certalert/' .env  
sed -i 's/DB_USERNAME=homestead/DB_USERNAME=root/' .env  
sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=/' .env  
php artisan migrate  
php artisan serve
