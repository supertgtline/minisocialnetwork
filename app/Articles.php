<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
   // protected $table='articles';
   protected $fillable = [
   'user_id','content','Live','post_on'

   ];
   public function setLiveAttribute($value){
   	$this->attributes['Live'] = (boolean)($value);
   }
   public function getShortContentAttribute($value){
   	return substr($this->content,0,random_int(0,100)).'...';
   }
}
