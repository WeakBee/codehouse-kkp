<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section5 extends Model
{
    public $table = "section5";
    use HasFactory;

    protected $fillable = [
        'person_image',
        'person_quote',
        'person_name',
        'person_position',
        'person_company',
    ];
}
