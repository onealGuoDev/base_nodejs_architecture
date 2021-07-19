sudo docker rm -f chat_php
cp $PWD/.env  $PWD/DBExtend
sudo docker run -it --name chat_php -v "$PWD/DBExtend":/usr/src/app chat_php /bin/bash -c "composer install; php artisan config:cache; php artisan migrate;php artisan db:seed --class=BasicSeeder"
sudo docker exec -it chat_redis /bin/bash -c "redis-cli -a thisisnotyourpasswd SET 'userKey' '[]'; redis-cli -a thisisnotyourpasswd SET 'updateRecord' '[]'"