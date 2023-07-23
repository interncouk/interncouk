#!/bin/bash

# Print a message before removing the old custom configuration file
echo "Removing the old custom configuration file..."
sudo rm /etc/httpd/conf.d/apache_my_custom.conf

# Print a message while creating the new custom configuration file
echo "Creating the new custom configuration file..."
sudo cat <<EOF > /etc/httpd/conf.d/elasticbeanstalk/custom.conf
<Directory /var/www/html>
    Options FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
EOF

# Print a message before restarting Apache
echo "Restarting Apache..."
sudo systemctl restart httpd

# Print a final message to indicate the end of the script
echo "Script execution completed."
