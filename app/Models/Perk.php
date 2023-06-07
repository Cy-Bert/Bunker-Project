<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perk extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'desc',
        'type',
        'character_id',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
