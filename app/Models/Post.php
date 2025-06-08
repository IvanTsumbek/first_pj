<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function category()
   {
    return $this->belongsTo(Category::class);   //при 1 ко многим
   }

   public function tags()
   {
return $this->belongsToMany(Tag::class);     //многие ко многим
   }
}