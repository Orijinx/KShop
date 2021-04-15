<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartConnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_conns', function (Blueprint $table) {
            $table->id();


            //Cart_conn
//            $table->integer("user_id")->unsigned();//User foreign key
            $table->foreignId("cart_id")->references("id")->on("carts");

//            $table->integer("product_id")->unsigned();//Product foreign key
            $table->foreignId("product_id")->references("id")->on("products");

            $table->integer("quantity")->unsigned()->default(1);

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
        Schema::dropIfExists('cart_conns');
    }
}
