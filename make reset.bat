cd App && docker-compose down
docker rmi app-application
cd App && docker build -t app-application .
