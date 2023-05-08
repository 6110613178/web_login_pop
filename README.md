# web_login_pop
เว็บแอพพลิเคชั่นให้บริการซื้อ/ขายอสังหาริมทรัพย์  
(billion main)

## Project setup
### Environment setup
[Xampp Download](https://www.apachefriends.org/download.html)  
[Composer Download](https://getcomposer.org/download/)
(*check 'Add this PHP to path')  
Go to Project directory.
```
cd billion
```
Update Composer.
```
composer update
```
### Database setup
1. Start Apache and MySQL in Xampp.  
2. Open phpMyAdmin then create multi_auth database.   
3. Import multi_auth.sql to multi_auth database.  

## Project run method
### Run Laravel project
```
php artisan serve
```
See web-application [http://localhost:8000/](http://localhost:8000/)   

### Tester ID (Buyer status)
Email: user@user.com
Password: 1234
