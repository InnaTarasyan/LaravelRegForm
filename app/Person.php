<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    public $timestamps = false;
    protected $dateFormat = 'U';

    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $image_name;

    protected $fillable = [ 'first_name', 'last_name', 'email', 'password', 'image_name' ];

}
