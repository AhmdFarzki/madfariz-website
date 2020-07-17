<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo',
        'name',
        'organizer',
        'date_competition',
        'description',
        'link',
    ];

    public function achievement(){
        return $this->hasMany( Achievement::class, 'id', 'photo','name','organizer','date_competition','description','link', );
    }
}
