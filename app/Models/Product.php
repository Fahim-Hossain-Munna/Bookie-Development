<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tag;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];

    public function manywithtags(){
        return $this->belongsToMany(Tag::class,'product_tag');
    }
}
