<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Camp extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'places',
        'city_id',
    ];


    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
