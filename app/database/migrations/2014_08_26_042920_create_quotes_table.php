<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('quotes', function(Blueprint $table)
            {
            $table->increments('id');
            $table->string('vendor_id',20);
            $table->string('origin',50);
            $table->string('destination',50);
            $table->decimal('buy',10,2);
            $table->decimal('sell',10,2);
            $table->text('cargo');
            $table->text('note');
            $table->bigInteger('parent_id');
            $table->string('quote_id',25);
            $table->softDeletes();
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
		Schema::drop('quotes');
	}

}
