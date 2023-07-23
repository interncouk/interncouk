#!/bin/bash
cp .platform/apache_my_custom.conf /etc/httpd/conf.d/elasticbeanstalk/
sudo systemctl restart httpd