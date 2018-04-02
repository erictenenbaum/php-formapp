<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Primary Key
    public $primaryKey = 'id';

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    
}
