<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;  //трейт для мягкого удаления
    
    
    protected $table = 'posts'; //всегда прописывать для удобства откуда пришла миграция
    protected $guarded = [];                     //разблокируем для функции create все атрибуты
// protected $fillable = ['content', 'image']; //разблокируем для функции create только определенный атрибуты
// protected $fillable = false; //аналог того что я описал выше
}
