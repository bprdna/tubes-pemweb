<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar_User extends Model
{
    protected $table = 'seminar_user';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'seminar_id'
    ];
}
