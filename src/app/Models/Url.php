<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['original_url', 'short_url'];
    protected $table = 'urls';
}
