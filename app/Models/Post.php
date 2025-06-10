<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;
   protected $guarded = false;
   public function category()
   {
    return $this->belongsTo(Category::class);   //при 1 ко многим
   }

   public function tags()
   {
return $this->belongsToMany(Tag::class);     //многие ко многим
   }
}