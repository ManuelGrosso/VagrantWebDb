#!/bin/bash
echo "php provisioning - begin"
sudo apt install php
sudo apt install php-mysql
sudo phpenmod mysqli
sudo service apache2 restart
echo "php provisioning - end"