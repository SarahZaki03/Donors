<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    protected $guarded = [];

    public function address() {
    	return $this->belongsTo(Address::class);	
    }


    public function status() {
    	return $this->belongsTo(Status::class);	
    }
    
    
}
