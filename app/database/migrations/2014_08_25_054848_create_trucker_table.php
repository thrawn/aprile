<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trucker', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',100);
            $table->string('contact_name',100);
            $table->text('address');
            $table->string('city',100);
            $table->string('state',2);
            $table->string('contact_phone',50);
            $table->string('contact_alternate_phone',50);
            $table->string('contact_email',100);
            $table->text('note');
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
		Schema::drop('trucker');
	}

}
