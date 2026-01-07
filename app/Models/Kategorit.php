<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategorit extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function fundraising()
    {
        return $this->hasMany(Fundraising::class);
    }
}
