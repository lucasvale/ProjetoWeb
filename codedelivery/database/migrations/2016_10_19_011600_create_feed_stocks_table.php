<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedStocksTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('feed_stocks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->string('name');
            $table->text('description');
            $table->date('manufactdate');
            $table->date('expiratedate');
            $table->integer('qtd');
            $table->decimal('price');
            $table->string('type');
            $table->integer('lote');
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
		Schema::drop('feed_stocks');
	}

}
