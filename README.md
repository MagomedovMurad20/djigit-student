## Для запуска этого проекта вам понадобитсяЖ PHP 8.0, Apache 2.4/ либо  nginx:1.17,
## либо Openserver c данными модулями, либо Docker Compose, все необходимые инструменты и их версии указаны в файле docker-compose
## Приложение запускается по адресу http://localhost:08080
## Приложение запускается командой: make init и отключается командой: docker compose down

### После клонирования данного проекта с gitHub следуйте инструкции:

При использовании без докера введите следующие команды:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```
Скопируйте .env.example и переименуйте в .env (если `.env` файла у вас нет):

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
