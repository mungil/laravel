<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahunAndPengurusTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tahun', function(Blueprint $table)
		{
			$table->increments('id_tahun');
			$table->string('nama_tahun');
			$table->timestamps();
		});

		Schema::create('pengurus', function(Blueprint $table)
		{
			$table->increments('id_pengurus');

			//membuat foreign key menggunakan migration
			$table->integer('id_tahun')->unsigned()->index();
			$table->foreign('id_tahun')->references('id_tahun')->on('tahun')->onDelete('cascade');
			$table->enum('jk', array('Pria', 'Wanita'))->default('Pria');
			$table->string('nama_pengurus');
			$table->string('email');
			$table->string('no_telp');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengurus');
		Schema::drop('tahun');
	}

}
