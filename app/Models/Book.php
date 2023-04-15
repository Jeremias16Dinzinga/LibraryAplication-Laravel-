<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['title','id_user','pages','price']; 

    public function relUser(){
        return $this->hasOne('App\Models\User','id','id_user');
    }
}
