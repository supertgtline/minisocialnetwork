<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
   // protected $table='articles';
   protected $fillable = [
   'user_id','live','content','post_on'

   ];
   public function setLiveAttribute($value){
   	$this->attributes['Live'] = (boolean)($value);
   }
}
