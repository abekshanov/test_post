
## Read me
 - Склонировать репозиторий в папку git clone https://github.com/abekshanov/test_post.git
 - В папке с проектом выполнить cp .env.example .env
 - Выполнить composer install
 - Убедиться, что порт 3306 не используется. При необходимости выполнить service mysql stop.
 - Запустить docker-контейнер  vendor/bin/sail up -d
 - Выполнить vendor/bin/sail artisan key:generate
 - Запустить миграции и сиды: 
   - vendor/bin/sail artisan migrate
   - vendor/bin/sail artisan db:seed
 - хост доступен: http://localhost:8088/

 - Апи для просмотра постов GET: http://localhost:8088/api/v1/posts
