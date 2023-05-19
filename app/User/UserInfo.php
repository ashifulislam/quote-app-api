<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'uuid', 'first_name', 'last_name', 'email'
    ];
}
