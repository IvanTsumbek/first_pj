<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
   use HasFactory;

     protected $guarded = false;
   public function posts()
   {
    return $this->belongsToMany(Post::class); //многие ко многим
   }
}
