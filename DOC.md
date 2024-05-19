# Примеры запросов
## Студенты
### Получение студентов: `GET /api/students`
### Добавление нового студента: `POST /api/students/add?params`
``` json
{
  "name": "John Doe", //require
  "email": "j@doe.com", //require
  "lesson_ids": [1, 2, 3], //без квадратных скобок
  "grade_id": 1 //require
}
```
### Обновление студента `POST /api/students/{id}?params`
``` JSON
{
  "name": "John Doe", //require
  "name": "j@doe.com", //require
  "grade_id": 2,
  "lesson_ids": [1, 2], //без квадратных скобок
}
```
### Получение данных одного студента `GET /api/students/{id}`
### Удаление студента `DELETE /api/students/{id}`

## Лекции
### Получение лекций: `GET /api/lessons`
### Добавление новой лекции: `POST /api/lessons/add?params`
``` json
{
  "theme": "PHP", //require
  "email": "ABOUT PHP",
  "student_id": 1,
}
```
### Обновление лекций `POST /lessons/{id}?params`
```JSON
{
  "theme": "JAVA", //require
  "description": "ABOUT JAVA"
}
```
### Получение данных одной лекции `GET /api/lessons/{id}`
### Удаление лекции `DELETE /api/lessons/{id}`

## Классы
### Получение классов: `GET /api/grades`
### Добавление нового класса: `POST /api/grades/add?params`
``` json
{
  "name": "second", //require
}
```
### Обновление класса `PUT /grades/{id}?params`
```JSON
{
  "name": "third" //require
}
```
### Получение данных одного класса `GET /api/grades/{id}`
### Удаление класса `DELETE /api/grades/{grade}`
