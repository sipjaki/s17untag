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
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

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

    public function statusadmin()
    {
        return $this->belongsTo(statusadmin::class, 'statusadmin');
    }


    // RELASI TABLE UTAMA UNTUK DATABASE SABHA ==================================================================
    // SABHA 1 HAK AKSES

        public function sabha1()
    {
        return $this->hasMany(sabha1::class);
    }
        public function sabha2()
    {
        return $this->hasMany(sabha2::class);
    }
        public function sabha3()
    {
        return $this->hasMany(sabha3::class);
    }
        public function sabha4()
    {
        return $this->hasMany(sabha4::class);
    }
        public function sabha5()
    {
        return $this->hasMany(sabha5::class);
    }
        public function sabha6()
    {
        return $this->hasMany(sabha6::class);
    }
        public function sabha7()
    {
        return $this->hasMany(sabha7::class);
    }
        public function sabha8()
    {
        return $this->hasMany(sabha8::class);
    }
        public function sabha9()
    {
        return $this->hasMany(sabha9::class);
    }
        public function sabha10()
    {
        return $this->hasMany(sabha10::class);
    }
        public function sabha11()
    {
        return $this->hasMany(sabha11::class);
    }
        public function sabha12()
    {
        return $this->hasMany(sabha12::class);
    }
        public function sabha13()
    {
        return $this->hasMany(sabha13::class);
    }
        public function sabha14()
    {
        return $this->hasMany(sabha14::class);
    }
        public function sabha15()
    {
        return $this->hasMany(sabha15::class);
    }
        public function sabha16()
    {
        return $this->hasMany(sabha16::class);
    }
        public function sabha17()
    {
        return $this->hasMany(sabha17::class);
    }
        public function sabha18()
    {
        return $this->hasMany(sabha18::class);
    }
        public function sabha19()
    {
        return $this->hasMany(sabha19::class);
    }
        public function sabha20()
    {
        return $this->hasMany(sabha20::class);
    }
        public function sabha21()
    {
        return $this->hasMany(sabha21::class);
    }
        public function sabha22()
    {
        return $this->hasMany(sabha22::class);
    }
        public function sabha23()
    {
        return $this->hasMany(sabha23::class);
    }
        public function sabha24()
    {
        return $this->hasMany(sabha24::class);
    }
        public function sabha25()
    {
        return $this->hasMany(sabha25::class);
    }
        public function sabha26()
    {
        return $this->hasMany(sabha26::class);
    }


}
