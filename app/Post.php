<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Image;

class Post extends Model
{
    protected $guarder = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'post_id');
    }
}
