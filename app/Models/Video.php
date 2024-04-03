<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
class Video extends Model
{
    use HasFactory;

protected $guarded = [];
public function tags():MorphToMany
{
   return $this->morphTMany(Tag::class, 'tag_taggable');
}

}
