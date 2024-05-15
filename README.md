## Для запуска этого проекта вам понадобится Docker Compose, все необходимые инструменты и их версии указаны в файле docker-compose

### После клонирования данного проекта с gitHub следуйте инструкции:

Скопируйте .env.example и переименуйте в .env (if `.env` file not exists):

```bash
cp .env.example .env
```

Добавьте свои параметры в `.env` файл,
к примеру, `FORWARD_DB_PORT`, `FORWARD_REDIS_PORT`, `DB_PASSWORD`, `DB_HOST` и т.д,
если потребуется!

Потом введите в консоли следующие команды:

## Через make, эта команда запустит скрипт в makefile:

```bash
make init
```

## либо по отдельности
```bash
docker-compose up -d

docker-compose exec app composer install

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan migrate --seed

docker-compose exec app php artisan storage:link
```
