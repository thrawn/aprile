<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('belongs_to_id',50);
                        $table->string('filename',150);
                        $table->string('filetype',100);
                        $table->string('filemime',100);
                        $table->bigInteger('filesize');
                        $table->text('filepath');
                        $table->text('note');
                        $table->string('created_by',25);
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
		Schema::drop('files');
	}

}
