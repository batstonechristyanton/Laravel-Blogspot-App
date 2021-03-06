<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // Table Name 
 
   protected $table = 'posts'; 
   // protected  
    public $primaryKey ='id'; 
    // Time stamps 
    public $timestamps=true;

    public function user(){
        return$this ->belongsTO('App\User');
    }

    public function post(){

        return $this->belongsTo('App\Post');
    }

}
