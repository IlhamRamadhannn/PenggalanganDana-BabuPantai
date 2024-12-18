<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Articles extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}    
