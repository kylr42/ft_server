#!/bin/bash

#don't touch
service mysql start

#test page of the site
echo "<?php phpinfo(); ?>" > /var/www/html/index.php

#php-fpm socket settings
echo "listen = 127.0.0.1:9000" >> etc/php/7.3/fpm/pool.d/www.conf

#database config
echo "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'jsiona'@'localhost' IDENTIFIED BY 'pmapass';" | mysql -u root
echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'jsiona'@'localhost' IDENTIFIED BY 'pmapass';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mysql wordpress < backup.sql

#install phpMyAdmin
unzip -qq tmp/phpMyAdmin-5.1.0-all-languages.zip -d /var/www/html/phpmyadmin
mv /var/www/html/phpmyadmin/phpMyAdmin-5.1.0-all-languages/* /var/www/html/phpmyadmin && rm -rf /var/www/html/phpmyadmin/phpMyAdmin-5.1.0-all-languages/

#install WordPress
tar xf tmp/latest.tar.gz -C /var/www/html

#config ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 1 -nodes -out crt.crt -keyout key.key -subj "/C=RU/ST=Tatarstan/L=Kazan/O=Ecole 42/OU=Terra/CN=localhost"

#granting rights of the files
chmod 755 -R /var/www;

#config phpMyAdmin
mv /tmp/config.inc.php /var/www/html/phpmyadmin/
mv /tmp/wp-config.php /var/www/html/wordpress/wp-config.php

#start services
service php7.3-fpm start;
service nginx start;
bash
