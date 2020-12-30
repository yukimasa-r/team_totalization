<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $dates = ['date'];

    protected $fillable = [
        'date', 'teamName', 'areaKou', 'areaOtsu', 'areaHei', 'areaTei'
    ];
}
