<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model Post
class Post extends Model
{
    use HasFactory;

    protected $table = 'message';
}
