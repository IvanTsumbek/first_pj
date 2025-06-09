<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = false;
    public function posts()
    {
        return $this->hasMany(Post::class);   //при многие к одному
    }
}
