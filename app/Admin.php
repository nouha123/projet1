<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable


{
    protected $table="admins";

    //
}
