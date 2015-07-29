<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id');
			$table->string('student_name');
			$table->integer('year');
			$table->string('branch');
			$table->integer('contact_no');
			$table->string('email');
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
		Schema::drop('students_infos');
	}

}
