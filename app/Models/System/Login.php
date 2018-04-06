<?php

namespace EICM\Models\System;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'logins';

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = false;
}
