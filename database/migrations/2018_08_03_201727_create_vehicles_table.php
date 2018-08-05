<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehiclemodel_id')->index();
            $table->unsignedInteger('manufacturer_id')->index();
            $table->enum('type', ['electric', 'hybrid', 'diesel', 'petrol']);
            $table->enum('usage', ['personal', 'business']);
            $table->char('license_plate', 10)->unique();
            $table->integer('weight_category');
            $table->tinyInteger('no_seats');
            $table->boolean('has_boot');
            $table->boolean('has_trailer');
            $table->unsignedInteger('owner_id')->index();
            $table->enum('transmission', ['manual', 'semi-automatic', 'automatic']);
            $table->unsignedInteger('colour_id')->index();
            $table->boolean('is_hgv');
            $table->tinyInteger('no_doors');
            $table->boolean('sunroof');
            $table->boolean('has_gps');
            $table->tinyInteger('no_wheels');
            $table->integer('engine_cc');
            $table->enum('fuel_type', ['electric', 'diesel', 'petrol', 'duel']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
