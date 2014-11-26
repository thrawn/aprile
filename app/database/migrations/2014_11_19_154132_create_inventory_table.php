<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventory', function(Blueprint $table)
		{
            $table->bigIncrements('id');
            $table->bigInteger('customer_id');
            $table->integer('account_number')->unsigned();
            $table->string('consignee',150);
            $table->string('shipper',150);
            $table->string('po',150);
            $table->string('job',150);
            $table->string('line',150);
            $table->date('ets');
            $table->string('pol',150);
            $table->string('vessel',150);
            $table->string('pod',150);
            $table->date('eta');
            $table->text('cntr_number');
            $table->integer('cntr_quantity');
            $table->string('cntr_size',10);
            $table->enum('cntr_status', array('scheduled','en route','loading','unloading','discharged','on hold','canceled'));
            $table->text('notes');
            $table->string('created_by',50);
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
		Schema::drop('inventory');
	}

}
