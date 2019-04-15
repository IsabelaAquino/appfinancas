<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			//people data
			$table->string('cpf', 11)->unique()->nullabel();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->data('birth')->nullabel();
			$table->char('gender', 1)->nullabel();
			$table->text('notes')->nullabel();

			//auth data
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nulllabel();
			
			//Permission
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
