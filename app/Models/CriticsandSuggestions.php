<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriticsandSuggestions extends Model
{
    use HasFactory;

    public $table='criticsandsuggestions';


    protected $fillable = [
        'title',
        'contents',
    ];
}
