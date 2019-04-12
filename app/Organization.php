<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	protected $table = 'organizations';
	
	protected $guarded = [];

    public function address() {
    	return $this->belongsTo(Address::class);	
    }
}
