### Для работы с проектом вам понадобится PHP 8.0, Apache 2.4/ либо  nginx:1.17, MySQL, composer lts.
### Тестировать можно с помощью POSTMAN. Примеры запросов в файле `DOC.md`. Мои заметки по исполнению проекта указаны в файле `NOTES.md`
### Для запуска можно использовать Openserver c данными модулями, либо Docker Compose всё необходимое файле docker-compose, 
### Eсли у вас есть БД, то вам достаточно запустить встроенный сервер командой `php artisan serve`.

Скопируйте .env.example и переименуйте в .env (если `.env` файла у вас нет):
Добавьте свои параметры в `.env` файл,
к примеру, `FORWARD_DB_PORT`, `FORWARD_REDIS_PORT`, `DB_PASSWORD`, `DB_HOST` и т.д,
если потребуется!

### Введите следующие команды:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```
### Запуск через Докер
### Через make, эта команда запустит скрипт в makefile:

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
### Сервер запускается по адресу `http://localhost:08080 `
