<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['credit_id','client_id','fee_payment','name','last_name','ssn'];

    public function scopeSearch($query,$ssn)
    {
    return $query->where('ssn','LIKE',"%".$ssn."%");	
    }
}
