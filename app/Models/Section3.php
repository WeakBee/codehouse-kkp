<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section3 extends Model
{
    public $table = "section3";
    use HasFactory;

    protected $fillable = [
        'case_image',
        'title',
        'small_description',
        'description',
    ];
}
