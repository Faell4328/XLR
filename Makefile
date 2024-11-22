up:
	cd back && docker-compose up -d
	cd front && docker-compose up -d

down:
	cd back && docker-compose down
	cd front && docker-compose down

reset:
	docker rmi front-servidor
	docker rmi back-servidor
	cd front && docker build -t front-servidor .
	cd back && docker build -t back-servidor .
