<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'avatar_url',
        'phone_number',
        'gender',
        'date_of_birth',
    ];
}
