<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('vehicles', function(Blueprint $table){
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('vehicle_version_id')->unsigned();
            $table->integer('model');
            $table->integer('fuel_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('vehicle_version_id')->references('id')->on('vehicle_versions');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop("vehicles");
	}

}
