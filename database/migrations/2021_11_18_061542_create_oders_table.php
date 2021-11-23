<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->id();
            $table->Integer("product_id");
            $table->Integer("user_id");


            // $table->string("fullname");
            // $table->string("email");
            // $table->string("mob");
            // $table->string("mobile");
            // $table->string("fulladd");
            // $table->string("city");
            // $table->string("pin");
        

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
        Schema::dropIfExists('oders');
    }
}
