# Hostel-Shifting
Website for alloting hostel rooms written in PHP, using MySql for backend and deployed using Xampp. (Apache and MySql)
<br/>
1. To setup move the hostel folder to xampp/htdocs
2. Move the hostel_allotment to xampp/mysql/data
3. To enable phpmyadmin
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
