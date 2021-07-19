sudo docker rm -f fitness_php
sudo docker rmi -f php:7.3-cli fitness_php
sudo docker build -t fitness_php ../docker/php/
#sudo docker run -d --name fitness_php -v ~/Desktop/fitness_node/DBExtend:/usr/src/app --network net fitness_php
