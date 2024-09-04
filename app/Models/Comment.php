<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Comment extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [''];

    public function onewithuser(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function hasmanyreplies(){
        return $this->hasMany(Comment::class,'parent_id','id');
    }


}
