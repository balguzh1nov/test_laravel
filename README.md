## Установка и запуск

Следуйте этим шагам для установки и запуска проекта:

### 1. Клонирование репозитория

Клонируйте репозиторий на ваше локальное устройство:

```sh
git clone https://github.com/balguzh1nov/test_laravel.git
cd client-management

Убедитесь, что настройки подключения к базе данных корректны:
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=clients_db
DB_USERNAME=postgres
DB_PASSWORD=1908

docker-compose up -d
docker-compose exec app composer install

docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed

GET http://localhost:8000/api/client/{phone_number}

{
    "id": 1,
    "phone_number": "+79161234567",
    "full_name": "Иван Иванов",
    "accumulated_points": 0,
    "created_at": "2024-06-12T00:27:24+06:00",
    "updated_at": "2024-06-12T00:27:24+06:00"
}

Ошибка (клиент не найден):
{
    "error": "Client not found"
}
