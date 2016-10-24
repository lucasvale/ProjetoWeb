<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaidasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saidas', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->date('expiratedate');
            $table->string('name');
            $table->decimal('value');
            $table->text('description');
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
		Schema::drop('saidas');
	}

}
