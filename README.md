# ЛидерТСЖ

Основано на SuiteCRM 7.6.4

* Вход админа
* Вход сотрудников

## Первоначальная установка

* Распаковываются файлы проекта
* Устанавливается первая база (для админа)
* Настройки первой базы копируются в папку с поддоменом `admin` (`domains/admin/config.php` - формат как в `config_override.php`).
Должны быть права на создание баз и пользователей.
* Закрыть web-доступ к папке `domains`

## Настройка сервера

В `nginx`:
fastcgi_read_timeout 300;

См. `readme` из пакета `domains`.

См. `readme` из пакета `webservice_lk`.
