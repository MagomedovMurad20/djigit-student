### Некоторые заметки по реализации.

1. В задании не было указано необходим ли Docker, мною было решено добавить в проект настройки для запуска в докере
2. Так же по заданию не указано необходимы ли сопутствующие сервисы СУБД, веб-сервер и т.д. Мною было решено использовать MySQL, Apapche2.4/ Nginx 1.17, PHPmyAdmin
3. Тестировать приложение можно через POSTMAN, либо через адресную строку вводя параметры HTTP запроса
4. Роуты можно было прописать через resource, но для большей наглядности я прописал их вручную
5. В задании не было указано, что апи должна иметь версионность v1,v2. Поэтому я не стал это прописывать
6. Так же не стал добавлять ifы и оповещения для юзера на случай ошибок, оставил вывод ошибок laravel. Так как это версия дев и дебаг режим позволит лучше разивать апи дальше.

