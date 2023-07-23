#!/bin/bash
cp etc/nginx/conf.d/apache_my_custom.conf /etc/httpd/conf.d/elasticbeanstalk/
sudo systemctl restart httpd