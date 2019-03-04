<?php namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UsersModel extends Eloquent {

    protected $collection = 'users';
    protected $fillable = ['username','department','roles','email'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
