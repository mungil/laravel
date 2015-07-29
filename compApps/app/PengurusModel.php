<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PengurusModel extends Model 
{
	protected $guarded = [];
	
	protected $table  = 'pengurus';

	protected $primaryKey = 'id_pengurus'; 

	public function tahun() {
		return $this->hasMany('App\TahunModel', 'id_tahun', 'id_tahun')->get();
	}
}
