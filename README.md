# Hostel-Shifting
### Website for alloting hostel rooms written in PHP, using MySql for backend and deployed using Xampp. (Apache and MySql)

## Setup 
1. To setup move the hostel folder to lampp/htdocs
`cp hostel/* /opt/lampp/htdocs`
2. To enable phpmyadmin
`cd /opt/lampp/etc/extra`
4. Edit httpd-xampp.conf to the following
```
<Directory "/opt/lampp/phpmyadmin">
    AllowOverride AuthConfig Limit
    Order allow,deny
    Allow from all
    Require all granted
</Directory>
```
5. Set password for phpmyadmin and mysql using `sudo /opt/lampp/lampp security`
6. Set the same password for variable db_pass in `validate.php` `assign.php` `allot.php`


## To set up database
1. Open phpmyadmin, login using password set above
2. Create database `hostel_allotment`
3. Create table `users` with the following schema
```
id VARCHAR 13
Name VARCHAR 50
pass VARCHAR 8 (as we use ddmmyyyy format)
selected BOOLEAN default - As defined: 0
```
4. Create table `rooms` with the following schema
```
hostel VARCHAR 3
room VARCHAR 6 (to support 290/11 format)
id VARCHAR 13 default - NULL
```
5. Import CSVs into the database