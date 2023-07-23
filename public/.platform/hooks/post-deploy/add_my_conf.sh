#!/bin/bash
sudo rm /etc/httpd/conf.d/apache_my_custom.conf
sudo cat <<EOF > /etc/httpd/conf.d/elasticbeanstalk/custom.conf
<Directory /var/www/html>
    Options FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
EOF
sudo systemctl restart httpd