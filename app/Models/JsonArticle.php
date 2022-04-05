<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonArticle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'data'];

    protected $casts = [
        'data' => Json::class,
    ];


}
