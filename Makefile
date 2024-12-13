up:
	cd App && docker-compose up -d

down:
	cd App && docker-compose down

reset:
	cd App && docker-compose down
	docker rmi app-application
	cd App && docker build -t app-application .

zerar:
	cd App && docker-compose down
	docker volume rm app_mysql-data
