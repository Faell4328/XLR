up:
	cd back && docker-compose up -d
	cd front && docker-compose up -d
	docker exec -it container-servidor-back chown -R 33:33 /var/www/html
	docker exec -it container-servidor-front chown -R 33:33 /var/www/html

down:
	cd back && docker-compose down
	cd front && docker-compose down

reset:
	cd back && docker-compose down
	cd front && docker-compose down
	docker rmi front-servidor
	docker rmi back-servidor
	cd front && docker build -t front-servidor .
	cd back && docker build -t back-servidor .

zerar:
	cd back && docker-compose down
	cd front && docker-compose down
	docker volume rm back_mysql-data
