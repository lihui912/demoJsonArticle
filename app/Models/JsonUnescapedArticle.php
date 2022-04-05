<?php

namespace App\Models;

use App\Casts\JsonUnescaped;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonUnescapedArticle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'data'];

    protected $casts = [
        'data' => JsonUnescaped::class,
    ];

}
