<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title',
        'SmallTitle',
        'Type',
        'Price',
        'Description',
        'Images',
        'Size',
    ];
}
