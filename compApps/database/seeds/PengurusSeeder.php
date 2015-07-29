<?php
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('pengurus')->delete();

		$values = array(
			[
				'id_pengurus'=>1, 
				'id_tahun'=>1, 
				'jk'=>'Pria',
				'nama_pengurus'=>'Eligio Moniz do Rego', 
				'email'=>'ebyx84@doscom.org', 
				'no_telp'=>'+670 7666 6660', 
				'created_at'=>new DateTime, 
				'updated_at'=>new DateTime
			],
			[
				'id_pengurus'=>2, 
				'id_tahun'=>4, 
				'jk'=>'Pria',
				'nama_pengurus'=>'Aditya kris', 
				'email'=>'kavac.icarus@gmail.com', 
				'no_telp'=>'081325408483',
				'created_at'=>new DateTime, 
				'updated_at'=>new DateTime],
			[
				'id_pengurus'=>3, 
				'id_tahun'=>5, 
				'jk'=>'Pria',
				'nama_pengurus'=>'Ahmad Nauval H', 
				'email'=>'ahmad.allunk@gmail.com', 
				'no_telp'=>'085640044882', 
				'created_at'=>new DateTime, 
				'updated_at'=>new DateTime
			],
			[
				'id_pengurus'=>4, 
				'id_tahun'=>3, 
				'jk'=>'Pria',
				'nama_pengurus'=>'Alan Budi Kusuma', 
				'email'=>'unix.abud@gmail.com', 
				'no_telp'=>'085640259748', 
				'created_at'=>new DateTime, 
				'updated_at'=>new DateTime
			],
			[
				'id_pengurus'=>5, 
				'id_tahun'=>4, 
				'jk'=>'Pria',
				'nama_pengurus'=>'Chaerul Umam', 
				'email'=>'mazumam89@gmail.com', 
				'no_telp'=>'085725533567', 
				'created_at'=>new DateTime, 
				'updated_at'=>new DateTime
			]
		);

		DB::table('pengurus')->insert($values);
	}
}