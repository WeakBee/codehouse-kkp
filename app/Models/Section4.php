<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section4 extends Model
{
    public $table = "section4";
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'card1title',
        'card1text',
        'card2title',
        'card2text',
        'card3title',
        'card3text',
    ];
}
