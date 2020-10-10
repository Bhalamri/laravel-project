<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
protected $table='posts';
public $primaryKey='id';


public function user(){
    return $this->belongsTo(User::class);
}

protected $fillable = ['status'];
}

//Post::all(); 