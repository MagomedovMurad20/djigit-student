# Примеры запросов
## Студенты
### Получение студентов: `GET /api/students`
### Добавление нового студента: `POST /api/students`
``` json
{
  "name": "John Doe",
  "email": "John Doe",
  "lesson_id": [1, 2, 3],
  "grade_id": 1
}
```
### Обновление студента `POST /api/students/{student}`
``` JSON
{
  "name": "John Doe",
  "lessons": [1, 2],
  "grade": 2
}
```
### Получение данных одного студента `GET /api/students/{student}`
### Удаление студента `DELETE /api/students/{student}`

## Лекции
### Получение лекций: `GET /api/lessons`
### Добавление новой лекции: `POST /api/lessons`
``` json
{
  "theme": "PHP",
  "email": "ABOUT PHP",
  "student_id": 1,
}
```
### Обновление лекций `POST /lessons/{id}`
```JSON
{
  "theme": "JAVA",
  "description": "ABOUT JAVA"
}
```
### Получение данных одной лекции `GET /api/lessons/{lesson}`
### Удаление лекции `DELETE /api/lessons/{lesson}`

## Классы
### Получение классов: `GET /api/grades`
### Добавление нового класса: `POST /api/grades`
``` json
{
  "name": "second",
  "student_id": 1
}
```
### Обновление класса `PUT /grades/{id}`
```JSON
{
  "name": "third"
}
```
### Получение данных одного класса `GET /api/grades/{grade}`
### Удаление класса `DELETE /api/grades/{grade}`
