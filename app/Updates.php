<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Updates extends Model
{
    protected $fillable = [
        'program', 'version', 'urgent'
    ];
}
