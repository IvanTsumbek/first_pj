<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
     use HasFactory;

    protected $guarded = false;
    public function posts()
    {
        return $this->hasMany(Post::class);   //при многие к одному
    }
}
