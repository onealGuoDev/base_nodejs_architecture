sudo docker rm testChat -f;
sudo docker rmi funcity/testchat:latest;
sudo docker build -t funcity/testchat /home/funcity/chat_backend/;
sudo docker run --name testChat -p 7011:3333 -d funcity/testchat:latest;

