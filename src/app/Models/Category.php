<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    protected $fillable = ['name', 'created_id', 'updated_at'];

    use HasFactory;

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Post::class);
    }
}
