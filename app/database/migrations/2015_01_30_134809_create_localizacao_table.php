<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacao', function ($table) {
			$table->increments('id');
			$table->integer('veiculo_id')->unsigned();
			$table->foreign('veiculo_id')->references('id')->on('veiculo');
			$table->string('latitude');
			$table->string('longitude');
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
		Schema::drop('localizacao');
	}

}
