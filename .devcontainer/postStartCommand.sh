ln -sfn /var/www/html /var/www/html/custom/plugins/NetzkollektivBccMailer/shopware
cd /var/www/html

./bin/console plugin:refresh
./bin/console plugin:install --activate NetzkollektivBccMailer
./bin/console cache:clear:all