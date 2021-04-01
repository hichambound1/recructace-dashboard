<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = [
        'name', 'email', 'description','site_web','tel','domain_id','user_id','ville_id'
    ];
}
