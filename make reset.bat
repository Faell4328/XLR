cd front
docker-compose down
cd ..
cd back
docker-compose down
cd ..
docker rmi front-servidor
docker rmi back-servidor
cd front
docker build -t front-servidor .
cd ..
cd back
docker build -t back-servidor .
