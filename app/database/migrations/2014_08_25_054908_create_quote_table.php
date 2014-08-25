<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quote', function(Blueprint $table)
		{
			$table->increments('id');
            $table->bigInteger('trucker_id');
            $table->string('origin',50);
            $table->string('destination',50);
            $table->decimal('buy',10,2);
            $table->decimal('sell',10,2);
            $table->text('cargo');
            $table->text('note');
            $table->bigInteger('parent_id');
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
		Schema::drop('quote');
	}

}
