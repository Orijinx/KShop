<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

//            STORAGE (INFO ABOUT PRODUCTS)
//            $table->integer("product_id")->unsigned();//Product foreign key
            $table->foreignId("product_id")->references("id")->on("products");
            $table->integer("quantity")->default(0);
            $table->date("last_delivery")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storages');
    }
}
