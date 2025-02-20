<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantio extends Model
{
    protected $fillable = [
        'produto',
        'data_plantio',
        'quantidade_bandeijas'
    ];
}
