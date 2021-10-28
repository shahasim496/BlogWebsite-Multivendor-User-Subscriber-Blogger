<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

   
    //primary key
    public $primarykey='id';
    //timestamp

    public function post() {

        return $this->belongsTo(post::class,'pst_id','id');
    
    }
    public function user() {
        return $this->belongsTo(user::class,'user_id','id');
    }
}
