<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Guarded(['id'])]
class Post extends Model implements TranslatableContract
{
    /** @use HasFactory<PostFactory> */
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'full_text'];
}
