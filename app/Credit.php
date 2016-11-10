<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $table = "credits";

    protected $fillable = ['amount','choices','fee','interest','client_id','fee_payment','current_amount','current_fee'];

    public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}
