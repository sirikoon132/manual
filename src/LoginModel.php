<?php

namespace Sirikoon\Manual;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'Login';
    public $primaryKey = 'id';
    public $timestamp = false;
}
