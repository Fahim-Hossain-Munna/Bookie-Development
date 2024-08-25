<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];

    function manywithtags(){
        return $this->belongsToMany(Tag::class,'blog_tag');
    }
    function onewithcategory(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    function onewithuser(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
