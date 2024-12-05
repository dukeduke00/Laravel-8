<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products'; // posto se model i klasa zovu ContactModel moramo ih povezati sa bazom tj contact u bazi

    protected $fillable = [
        'name', 'description', 'amount', 'price', 'image'
    ];
}
