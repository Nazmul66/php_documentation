<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // eloquent mutator use
    public function setTitleAttribute($value){
        $this->attributes["title"] = $value;
        $this->attributes["slug"]  = $this->slugify($value);
    }

    private function slugify($value) {
        $slug       = str_replace(' ','-', strtolower($value));
        $countSlug  = Post::where('slug', 'LIKE', $slug.'%' )->count();
        $suffix     = $countSlug ? $countSlug + 1 : '';
        $slug  .= $suffix;
        return $slug;
    }
}
