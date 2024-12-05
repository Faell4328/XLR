cd front
docker-compose up -d
cd ..
cd back
docker-compose up -d
docker exec -it container-servidor-back chown -R 33:33 /var/www/html
