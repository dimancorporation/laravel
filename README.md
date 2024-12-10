## О проекте

Just add water

## Требования

- Установленный Docker (https://www.docker.com/get-started)
- Docker Compose (обычно поставляется вместе с Docker)


## Запуск Docker контейнера

Выполните следующие шаги по порядку.

### Сборка образа

```bash
docker-compose build
```

### Запуск

```bash
docker-compose up -d
```

### Установка зависимостей

```bash
docker exec php-fpm composer install
```

Если в root директории не появился файл `.env`, создаем его из шаблона `.env.example`:

```bash
cp .env.example .env
```

После этого настройте параметры подключения к базе данных и другие переменные, если это требуется.

Сгенерируйте ключ
```bash
docker exec php-fpm php artisan key:generate
```

### Миграции

Выполните миграции с помощью команды:

```bash
docker exec php-fpm php artisan migrate
```

### Остановка контейнеров

Чтобы остановить контейнеры:
```bash
docker-compose down
```
