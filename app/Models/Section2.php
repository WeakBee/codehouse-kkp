<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section2 extends Model
{
    public $table = "section2";
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'card1title',
        'card1text',
        'card2title',
        'card2text',
        'card3title',
        'card3text',
        'card4title',
        'card4text',
        'card5title',
        'card5text',
        'card6title',
        'card6text',
    ];
}
