<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    protected $table = 'moods';

    protected $fillable = [
        'content'
    ];
}
