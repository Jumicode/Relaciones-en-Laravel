<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user():BelongsTo
    {
       return $this->belongsTo(User::class);
    }


    public function sim():HasOne
    {
        return $this->hasOne(Sim::class);
    }
}
