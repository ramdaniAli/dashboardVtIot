<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //Table name
    protected $table = 'data' ;

    public $timestamps = true;

    public $primaryKey = 'id';

  /**
     * testing
     * a details of patient belongs to the patient
     */
    public function datas() {
        return $this->belongsTo('App\User');
    }
}
