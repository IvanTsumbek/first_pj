<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;
   use Filterable;
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