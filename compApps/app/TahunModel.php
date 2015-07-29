<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TahunModel;

class TahunModel extends Model 
{
	//solusi jika primary key bukan field 'id'
	protected $primaryKey = 'id_tahun';
	
	protected $guarded = [];
	
	protected $table = 'tahun';

	public function pengurus() {
		//return $this->belongsTo('...', 'foreign key(tabel yang dituju)', 'foreign key(local tabel)');
		return $this->belongsTo('App\PengurusModel', 'id_tahun', 'id_tahun')->get();
	}

	public function getDataPengurus($key) {
		return PengurusModel::all()->where('id_tahun', $key);
	}

}
