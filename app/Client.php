<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    protected $fillable = ['name','last_name','ssn','address','work_location','email','phone','phone2'];

    public function credits()
    {
    	return $this->hasMany('App\Credit');
    }
}
