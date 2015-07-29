<?php
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
	
	public function run() 
	{
		DB::table('tahun')->delete();

		$values = array(
			['id_tahun'=>1, 'nama_tahun'=>'2005', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>2, 'nama_tahun'=>'2006', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>3, 'nama_tahun'=>'2007', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>4, 'nama_tahun'=>'2008', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>5, 'nama_tahun'=>'2009', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>6, 'nama_tahun'=>'2010', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>7, 'nama_tahun'=>'2011', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>8, 'nama_tahun'=>'2012', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>9, 'nama_tahun'=>'2013', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
			['id_tahun'=>10, 'nama_tahun'=>'2014', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
		);

		//seeder untuk menginputkan data
		DB::table('tahun')->insert($values);	
	}
}