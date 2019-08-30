<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Question extends Model
{
     use SoftDeletes;
     use Notifiable;
     use HasApiTokens;
     protected $dates = ['deleted_at'];
     protected $fillable = [
        'question','ca_id','option1','option2','option3','option4','ans'
    ];

     public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
