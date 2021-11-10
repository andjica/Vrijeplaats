<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Purchase;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
