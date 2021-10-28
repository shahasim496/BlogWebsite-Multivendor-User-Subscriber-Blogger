<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table
    protected $table ='posts';
    //primary key
    public $primarykey='id';
    //timestamp
    public $timestamps=true;

    public function user() {
        return $this->belongsTo(user::class);
    }
    public function Comment() { 
        return $this->hasMany(Comment::class,'pst_id','id');

    }

    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
