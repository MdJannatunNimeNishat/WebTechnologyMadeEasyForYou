<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $guarded=[ ];
    protected $fillable = [
         'u_id', 'c_id', 'titel','desc','post_image'
      
    ];
    /*public function user(){
    	return $this->belongsTo(User::class);
    }*/
}
