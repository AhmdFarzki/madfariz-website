<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo',
        'name',
        'category',
        'description',
        'teknologi',
    ];

    public function portfolios(){
        return $this->hasMany( Portfolio::class, 'id', 'photo', 'name', 'category', 'description', 'teknologi',  );
    }
    
}
