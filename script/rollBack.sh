sudo docker rm -f chat_php
cp $PWD/.env  $PWD/DBExtend
sudo docker run -it --name chat_php -v "$PWD/DBExtend":/usr/src/app chat_php /bin/bash -c "composer install; php artisan migrate:rollback; php artisan migrate;php artisan db:seed --class=BasicSeeder"