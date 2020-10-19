service mysql start

#config access
chown -R www-data var/www/*
chmod 755  /var/www/*

#create server website folder
mkdir /var/www/irodrigosite && touch /var/www/irodrigosite/index.php
echo "<?php phpinfo(); ?>" >> /var/www/irodrigosite/index.php

#CONFIG SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/irodrigosite.pem -keyout /etc/nginx/ssl/irodrigosite.key -subj "/C=SP/ST=Madrid/L=Madrid/O=42 Madrid/OU=irodrigo/CN=irodrigosite"

#config NGINX
mv ./srcs/nginx-conf /etc/nginx/sites-available/irodrigosite
ln -s /etc/nginx/sites-available/irodrigosite /etc/nginx/sites-enabled/irodrigosite
rm -rf /etc/nginx/sites-enabled/default

#config PHPMYADMIN
mkdir /var/www/irodrigosite/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1 -C /var/www/irodrigosite/phpmyadmin
mv /srcs/phpmyadmin.inc.php /var/www/irodrigosite/phpmyadmin/config.inc.php

#config MYSQL
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
echo "USE DATABASE wordpress" | mysql -u root --skip-password
mysql wordpress -u root --skip-password < /srcs/wordpress.sql

#config WORDPRESS
cd /tmp/
wget -c https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/ /var/www/irodrigosite
mv /srcs/wp-config.php /var/www/irodrigosite/wordpress

#start services
service php7.3-fpm start
service nginx start
bash
