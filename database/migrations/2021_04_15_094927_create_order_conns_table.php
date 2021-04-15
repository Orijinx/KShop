<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderConnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_conns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//User Foreign
            $table->foreignId("user_id")->references("id")->on("users");
//Cart foreign
            $table->foreignId("cart_id")->references("id")->on("carts");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_conns');
    }
}
