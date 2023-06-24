<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section1 extends Model
{
    public $table = "section1";
    use HasFactory;
    protected $fillable = [
        'text1',
        'text2',
        'text3',
        'buttontext'
    ];
}
