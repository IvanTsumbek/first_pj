<?php
                                                       // РЕДАКТИРОВАНИЕ МИГРАЦИЙ!!!!!!!!!!!!!!

// php artisan make:migration add_column_description_to_posts                        добавление атрибута к миграции, затем обрабатываем миграцию
// php artisan migrate                                                               накат миграции
// php artisan migrate:rollback                                                      откат миграции
// php artisan make:migration delete_column_description_to_posts_table               удаление атрибута
// php artisan make:migration edit_column_content_to_posts_table                     переименование атрибута (нужно не забывать, что мы поменяли атрибут и дальше в других местах будут возникать ошибки)
// php artisan make:migration change_column_post_content_to_string_to_posts_table    изменение типа данных у атрибута
// php artisan make:migration delete_table_from_db                                   удаление таблицы