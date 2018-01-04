<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    //
    protected $fillable = [
        'title',
        'brand',
        'model',
        'year',
        'month',
        'kilometers',
        'alarm_system',
        'aluminium_wheels',
        'multimedia_system',
        'abs',
        'esp',
        'parking_system',
        'wheels_size',
        'description',
        'price',
    ];


    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');

    }

}
