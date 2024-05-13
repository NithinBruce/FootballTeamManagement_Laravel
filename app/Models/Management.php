<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table = 'football';

    protected $fillable = [
        'playername',
        'position',
        'price',
        'image_url'
    ];
    public $timestamps = false;
}
