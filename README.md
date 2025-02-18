# LibraMaster

## Опис
LibraMaster - це потужна платформа для управління бібліотекою, побудована з використанням Laravel і принципів Domain-Driven Design (DDD). Платформа включає модулі для реєстрації користувачів, управління книгами, відстеження видачі та повернення книг, а також резервування книг.

## Структура проекту
Проект розділений на кілька шарів для покращення читабельності та підтримуваності коду:

- **Domain**: Основна бізнес-логіка та правила.
- **Application**: Інтерфейси, юзкейси та реалізації для роботи з даними.
- **Infrastructure**: Реалізація деталей інфраструктури, таких як моделі даних, контролери та утиліти.
- **Presentation**: Візуалізація даних та взаємодія з користувачем.

## Встановлення
1. Клонуйте репозиторій:
    ```bash
    git clone <URL репозитарію>
    ```
2. Перейдіть до каталогу проекту:
    ```bash
    cd libra_master
    ```
3. Встановіть необхідні залежності:
    ```bash
    composer install
    ```
4. Налаштуйте файл `.env` та виконайте міграції:
    ```bash
    php artisan migrate
    ```

## Запуск
Для запуску проекту виконайте команду:
```bash
php artisan serve
```

## Структура каталогів
```plaintext
libra_master/
├── app/
│   ├── Domain/
│   │   ├── Entities/
│   │   │   ├── Book.php
│   │   │   └── User.php
│   │   ├── Repositories/
│   │   │   └── BookRepositoryInterface.php
│   │   ├── Services/
│   │   │   └── BookService.php
│   │   └── UseCases/
│   │       └── ManageBooks.php
│   ├── Infrastructure/
│   │   ├── Persistence/
│   │   │   └── Eloquent/
│   │   │       └── BookRepository.php
│   │   ├── Providers/
│   │   │   └── AppServiceProvider.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── BookController.php
├── database/
│   ├── migrations/
│   │   └── create_books_table.php
├── routes/
│   ├── web.php
├── composer.json
└── README.md
```

## Опис компонентів
### Domain
- **Book.php**: Клас сутності книги.
- **User.php**: Клас сутності користувача.
- **BookRepositoryInterface.php**: Інтерфейс репозиторію книг.

### Application
- **ManageBooks.php**: Юзкейс для управління книгами.
- **BookService.php**: Сервіс для управління книгами.

### Infrastructure
- **BookRepository.php**: Реалізація репозиторію книг з використанням Eloquent ORM.
- **AppServiceProvider.php**: Провайдер для реєстрації репозиторіїв у контейнері служб.

### Presentation
- **BookController.php**: Контролер для управління книгами.

## Міграції
- **create_books_table.php**: Міграція для створення таблиці книг у базі даних.

## Маршрути
- **web.php**: Файл для визначення маршрутів веб-додатку.

## Ліцензія
Цей проект ліцензовано під ліцензією MIT. Для отримання додаткової інформації див. файл LICENSE.
