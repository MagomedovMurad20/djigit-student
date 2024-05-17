## Для запуска этого проекта вам понадобитсяЖ PHP 8.0, Apache 2.4/ либо  nginx:1.17. Инструкция по запуску ниже. Тестировать можно с помощью POSTMAN. Примеры запросов в файле `DOC.md`. Мои заметки по исполнению проекта указаны в файле `NOTES.md`
## либо Openserver c данными модулями, либо Docker Compose, все необходимые инструменты и их версии указаны в файле docker-compose

### Через Docker запускается по адресу `http://localhost:08080 `
### Через встроенный сервер командой `php artisan serve` запускается по адресу `http://127.0.0.1:8000` 

### После клонирования данного проекта с gitHub следуйте инструкции:

Скопируйте .env.example и переименуйте в .env (если `.env` файла у вас нет):

При использовании без докера введите следующие команды:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

Добавьте свои параметры в `.env` файл,
к примеру, `FORWARD_DB_PORT`, `FORWARD_REDIS_PORT`, `DB_PASSWORD`, `DB_HOST` и т.д,
если потребуется!

### Через Docker запускается командой: `make init` и 

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
### отключается командой: `docker compose down`
