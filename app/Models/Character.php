<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'health',
        'stamina',
        'luck',
        'notes_MJ',
        'avatar',
        'age',
        'size',
        'gender',
        'body_shape',
        'personality',
        'type',
        'status',
        'notes',
        'user_id',
        'table_id',
        'code_invit'
    ];

    public function table(): HasOne
    {
        return $this->hasOne(Table::class);
    }   
     
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
