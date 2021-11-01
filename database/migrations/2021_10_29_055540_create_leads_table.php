<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('markete_location')->nullable();
            $table->bigInteger('ask_price')->nullable();
            $table->bigInteger('price_per_door')->nullable();
            $table->bigInteger('gross_revenue')->nullable();
            $table->string('noi')->nullable();
            $table->integer('cap_rate')->nullable();
            $table->string('occupancy')->nullable();
            $table->string('asset_class')->nullable();
            $table->string('pro_forma')->nullable();
            $table->string('renovations')->nullable();
            $table->string('broker_contact')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('om_file')->nullable();
            $table->string('rent_roll_file')->nullable();
            $table->string('p_l_file')->nullable();
            $table->string('t12_file')->nullable();
            $table->string('t3_file')->nullable();
            $table->string('covid_file')->nullable();
            $table->string('capx_file')->nullable();
            $table->string('location_lat')->nullable();
            $table->string('location_long')->nullable();
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('leads');
    }
}
