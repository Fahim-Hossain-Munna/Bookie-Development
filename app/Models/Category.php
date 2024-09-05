<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Blog;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];

    public function hasmanyblogs(){
        return $this->hasMany(Blog::class,'category_id');
    }
    public function hasmanyproduct(){
        return $this->hasMany(Product::class,'category_id');
    }
}
