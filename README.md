## Установка и запуск

Следуйте этим шагам для установки и запуска проекта:

### 1. Клонирование репозитория

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

![image](https://github.com/balguzh1nov/test_laravel/assets/118799235/62cb8f04-a8dc-495f-82f3-6201ed6a0815)
![image](https://github.com/balguzh1nov/test_laravel/assets/118799235/bd6b3216-2423-44a5-8fc5-8a8e0a2b3dc5)
![image](https://github.com/balguzh1nov/test_laravel/assets/118799235/e7e1bdfd-8a75-4ce8-8f8d-8f11a77b7e12)
![image](https://github.com/balguzh1nov/test_laravel/assets/118799235/25cc0922-7354-4a2c-857a-3c0f260ed9fa)
