<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo',
        'name',
        'category',
        'level',
    ];

    public function skills(){
        return $this->hasMany( Skill::class, 'id', 'name' );
    }
}
