<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function book(){
        return $this -> hasMany(Book::class, 'genreId'); //ini karena ga pake snake case id_, yg 'genreId'->mengacu ke foreignKey
    }
}
