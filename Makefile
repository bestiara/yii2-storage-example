init: \
	docker-clean \
	up \
	composer-install

up:
	docker-compose up --build -d

stop:
	docker-compose stop

database-init: \
	migrations \
	fixtures

migrations:
	docker-compose run --rm backend yii migrate/fresh

fixtures:
	docker-compose run --rm backend yii fixture "*"

composer-install:
	docker-compose run --rm backend composer install

docker-clean:
	docker-compose down -v --remove-orphans
