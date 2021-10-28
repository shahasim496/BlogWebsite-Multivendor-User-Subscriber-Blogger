<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class susbscribed extends Model
{
    use HasFactory;

    protected $fillable = [
        'b_id',
        's_id'
    ];


    public function users ()
    {
        return $this->belongsToMany(User::class);
    }

}
