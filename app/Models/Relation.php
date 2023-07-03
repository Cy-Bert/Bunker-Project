<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'relation', 'to_character_id', 'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class, 'character_id');
    }

    public function other()
    {
        return $this->belongsTo(Character::class, 'to_character_id');
    }
}
