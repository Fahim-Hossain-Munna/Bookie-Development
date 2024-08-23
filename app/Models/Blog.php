<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tag;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];

    function manywithtags(){
        return $this->belongsToMany(Tag::class,'blog_tag');
    }

}
