<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model

{
   use SoftDeletes;
   // protected $table='articles';
   protected $fillable = [
   'user_id','content','Live','post_on'

   ];
   protected $dates = ['post_on','deleted_at'];
   public function setLiveAttribute($value){
   	$this->attributes['Live'] = (boolean)($value);
   }
   public function getShortContentAttribute($value){
   	return substr($this->content,0,random_int(0,100)).'...';
   }
   public function setPostOnAttribute($value){
      $this->attributes['post_on'] = Carbon::parse($value);
   }
}
