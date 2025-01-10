up:
	cd Front && docker-compose up -d
	cd Back && docker-compose up -d

down:
	cd Front && docker-compose down
	cd Back && docker-compose down

reset:	
	cd Front && docker-compose down && docker rmi front-xlr && docker build -t front-xlr .
	cd Back && docker-compose down && docker rmi back-xlr && docker build -t back-xlr .

zerar:
	cd Back && docker-compose down
	docker volume rm back_mysql-data
