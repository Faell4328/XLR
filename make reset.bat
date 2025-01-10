	cd Front && docker-compose down && docker rmi front-xlr && docker build -t front-xlr .
	cd Back && docker-compose down && docker rmi back-xlr && docker build -t back-xlr .
