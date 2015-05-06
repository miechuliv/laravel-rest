<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnginesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('engines', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code',255);
			$table->decimal('displacement',6,2);
			$table->integer('cartype_id')->unsigned();
			$table->foreign('cartype_id')->references('id')->on('cartypes');
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
		Schema::drop('engines');
	}

}
