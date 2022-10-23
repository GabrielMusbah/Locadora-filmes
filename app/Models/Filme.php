<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\User;

class Filme extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'value',
        'description',
    ];

}
