<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veiculo', function ($table) {
			$table->increments('id');
			$table->string('nome');
			$table->text('descricao');
			$table->integer('empresa_id')->unsigned();
			$table->foreign('empresa_id')->references('id')->on('empresa');
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
		Schema::drop('veiculo');
	}

}
