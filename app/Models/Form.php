<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $table = "form";
    use HasFactory;
    protected $fillable = [
        'category',
        'client_email',
        'client_name',
        'client_company',
        'client_phone',
        'how_can_we_help',
        'read'
    ];
}
