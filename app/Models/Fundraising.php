<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fundraising extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function fundraiser()
    {
        return $this->belongsTo(Fundraiser::class);
    }

    public function kategorit()
    {
        return $this->belongsTo(Kategorit::class);
    }

    public function donatur()
    {
        return $this->hasMany(Donatur::class)->where('is_paid', 1);
    }

    public function totalReachedAmount()
    {
        return $this->donaturs()->sum('total_amount');
    }

    public function fundraising_phase()
    {
        return $this->hasMany(Fundraising_phases::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(fundraising_withdrawals::class);
    }
}
