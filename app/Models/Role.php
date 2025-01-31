<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('added_by');
    }
}
