<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'date'
    ];
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
