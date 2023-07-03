<?php

namespace App\Models;

use App\Models\Character;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
