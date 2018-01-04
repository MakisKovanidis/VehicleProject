<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'URL',
        'filename',
    ];

    public function advertisement(){
        return $this->belongsTo('App\Models\Advertisement');

    }
}
