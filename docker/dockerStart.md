# Doc

## Commands

- Create nework
```
docker network create <APP_NAME>_network
```

- Run
```
docker-compose up -d --build

docker-compose --env-file .env up -d --build //С указанием env файла
```

- Down
```
docker-compose down
```

- Docker compose file output
```
docker-compose --env-file .env config
```

- Composer update
```
docker-compose exec php bash
composer update
exit
```
