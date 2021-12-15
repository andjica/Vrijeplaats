<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class City extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class, 'city_id');
    }
}
