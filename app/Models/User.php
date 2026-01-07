<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function jadimitra()
    {
        return $this->hasMany(Jadimitra::class);
    }

    public function fundraiser()
    {
        return $this->hasOne(Fundraiser::class);
        // MEMAMAKAI HAS ONE KARENA 1 USERS HANYA BISA MENJADI 1 FUNDRAISER
    }


    public function lokasipengajuan()
    {
        return $this->hasMany(Lokasipengajuan::class);
    }



}
