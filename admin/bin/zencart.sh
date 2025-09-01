#!/bin/bash
adduser --disabled-password ${1}
cp /etc/apache2/sites-available/zencart_tpl.local.conf /etc/apache2/sites-available/${1}.local.conf
sed -i "s/zencart/${1}/g" /etc/apache2/sites-available/${1}.local.conf
a2ensite ${1}.local.conf
systemctl reload apache2
cp /etc/hosts /etc/hosts.bak
sed -i "s/127.0.1.1/127.0.1.1 ${1}.local/" /etc/hosts
mariadb -e "CREATE DATABASE ${1}"
cd /home/${1}
git config --global --add safe.directory /home/zencart/zencart/zencart/.git
git clone /home/zencart/zencart/zencart ${1}
cd ${1}
git checkout -b ${1}
sed -i "s:// define('DEVELOPER_MODE:define('DEVELOPER_MODE:" zc_install/includes/localConfig.php
cd /home/${1}/${1}/admin/includes/extra_configures
cp /home/zencart/zencart/zencart/admin/includes/extra_configures/dev-skip_admin_rename.php .
chown -R ${1}:${1} /home/${1}
#firefox http://${1}
