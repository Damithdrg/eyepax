<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_representatives_working_routes', function (Blueprint $table) {
            $table->unsignedBigInteger('representative_id');
            $table->unsignedBigInteger('route_id');

            $table->foreign('representative_id')->references('id')->on('sales_representatives')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('working_routes')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_representatives_working_routes');
    }
};
