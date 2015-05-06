<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarmodelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carmodels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',255);
			$table->integer('carmake_id')->unsigned();
			$table->foreign('carmake_id')->references('id')->on('carmakes');
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
		Schema::drop('carmodels');
	}

}
