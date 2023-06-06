<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'status',
        'food',
        'heat',
        'heal',
        'ammo',
        'notes',
        'user_id',
    ];
}
