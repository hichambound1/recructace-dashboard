<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postule extends Model
{
    protected $fillable = [
        'condidat_id', 'entreprise_id',
    ];
}
