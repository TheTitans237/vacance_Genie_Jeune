<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

	public function evenements()
	{
		return $this->belongsToMany('App\Models\Evenement');
	}

	public function media()
	{
		return $this->hasMany('App\Models\Medium');
	}
}
