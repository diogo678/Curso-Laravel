<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $cats = [
      'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    public function user(){
      return $this->belongsTo('App\models\user');
    }
    public function users(){
      return $this->belongsToMany('App\models\user');
    }
    
}
