<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Blog;
use App\Models\Product;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];

    function manywithblogs(){
        return $this->belongsToMany(Blog::class,'blog_tag');
    }
    public function manywithproducts(){
        return $this->belongsToMany(Product::class,'product_tag');
    }
}
