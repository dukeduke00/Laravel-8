<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact'; // posto se model i klasa zovu ContactModel moramo ih povezati sa bazom tj contact u bazi

    protected $fillable = [
        'name', 'subject', 'message'
    ];  // Ovo su polja koja korisnik moze da edituje, ovim mu dajemo tu mogucnost
}
