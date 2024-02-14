<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Comment extends Model
{
    protected $fillable = ['content', 'post_id', 'created_id', 'updated_at'];
    use HasFactory;
}
