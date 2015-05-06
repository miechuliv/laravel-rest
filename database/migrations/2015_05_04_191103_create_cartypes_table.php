<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cartypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',255);
			$table->date('production_start');
			$table->date('production_stop');
			$table->integer('carmodel_id')->unsigned();
			$table->foreign('carmodel_id')->references('id')->on('carmodels');
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
		Schema::drop('cartypes');
	}

}
