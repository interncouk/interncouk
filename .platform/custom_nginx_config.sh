#!/bin/bash

# Create custom Nginx configuration file
echo 'server {
    listen 80;
    server_name demo.intern.co.uk;
    root /var/www/html/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_split_path_info ^(.+?\.php)(/.+)$;
        include fastcgi_params;
    }
}' | sudo tee /etc/nginx/conf.d/custom.conf > /dev/null

# Restart Nginx to apply the changes
sudo systemctl restart nginx