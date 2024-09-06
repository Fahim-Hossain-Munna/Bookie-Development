<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Customer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];
}
