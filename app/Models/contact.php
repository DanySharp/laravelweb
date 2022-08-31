<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    public static function cursorPaginate($int)
    {
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
