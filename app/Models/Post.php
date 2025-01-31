<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
class Post extends Model
{
    use HasFactory;


    protected $guarded = [];

 public function image(): MorphMany
 {
    return $this->morphMany(Image::class, 'imageable');
 }

 public function tags():MorphToMany
 {
    return $this->morphTMany(Tag::class, 'tag_taggable');
 }



}
