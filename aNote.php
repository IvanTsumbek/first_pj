<?php
// php artisan make:model -m Post                                   создание модели с миграцией с названием Post
// php artisan make:controller Post                                 создание контроллера названием Post                                    
                                                       
                                                                                         
                                                       
                                                       
                                                       // РЕДАКТИРОВАНИЕ МИГРАЦИЙ!!!!!!!!!!!!!!

// php artisan make:migration add_column_description_to_posts                        добавление атрибута к миграции, затем обрабатываем миграцию
// php artisan migrate                                                               накат миграции
// php artisan migrate:rollback                                                      откат миграции
// php artisan make:migration delete_column_description_to_posts_table               удаление атрибута
// php artisan make:migration edit_column_content_to_posts_table                     переименование атрибута (нужно не забывать, что мы поменяли атрибут и дальше в других местах будут возникать ошибки)
// php artisan make:migration change_column_post_content_to_string_to_posts_table    изменение типа данных у атрибута
// php artisan make:migration delete_table_from_db                                   удаление таблицы



// 2025_06_02_201413_add_column_description_to_posts.php
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->text('description')->nullable()->after('content');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->dropColumn('description');
//         });
//     }
// };


// 2025_06_02_202628_delete_column_description_to_posts_table.php
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->dropColumn('description');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//              $table->text('description')->nullable()->after('content');
//         });
//     }
// };


// 2025_06_02_203318_edit_column_content_to_posts_table.php
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->renameColumn('content' , 'post_content');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->renameColumn('post_content' , 'content');
//         });
//     }
// };


// 2025_06_02_204550_change_column_post_content_to_string_to_posts_table.php
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->string('post_content')->change();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('posts', function (Blueprint $table) {
//             $table->text('post_content')->change();
//         });
//     }
// };


// 2025_06_02_205451_delete_table_from_db.php
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::dropIfExists('posts');
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::create('posts', function (Blueprint $table) {
//             $table->id();
//             $table->string('title');
//             $table->string('post_content');
//             $table->string('image')->nullable();
//             $table->unsignedBigInteger('likes')->nullable();
//             $table->boolean('is_published')->default(1);
//             $table->timestamps();

//             $table->softDeletes();
//         });
//     }
// };
