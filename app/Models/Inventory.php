<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Size;
use App\Models\Color;

class Inventory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [''];


    public function hasonewithsize(){
        return $this->hasOne(Size::class,'id','size_id');
    }
    public function hasonewithcolor(){
        return $this->hasOne(Color::class,'id','color_id');
    }
}
