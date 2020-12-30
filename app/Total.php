<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $dates = ['date'];

    protected $fillable = [
        'date', 'teamName', 'areaKou', 'areaOtsu', 'areaHei', 'areaTei'
    ];

    public static $rules = [
        'date' => 'required|date|unique:totals',
        'teamName' => 'required|in: "A","B","C","D"',
        'areaKou' => 'required|integer|min: 0',
        'areaOtsu' => 'required|integer|min: 0',
        'areaHei' => 'required|integer|min: 0',
        'areaTei' => 'required|integer|min: 0'
    ];
}
