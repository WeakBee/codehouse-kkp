<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    public $table = "views";
    use HasFactory;

    protected $fillable = [
        'ip_address',
    ];
}
