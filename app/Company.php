<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	// relataion one to many
    public function Banners(){
    	return $this->hasMany(Banner::class);
    }

    // relataion one to many
    public function Clients(){
    	return $this->hasMany(Client::class);
    }
}
