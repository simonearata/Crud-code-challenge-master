<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $fillable = [
        'nome_input',
        'title',
        'content',
        'url'
    ];
}
