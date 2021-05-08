<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//PRODUCT INFO
            $table->string("name");
            $table->float("price");
            $table->text("description");
            //Tag Foreign
            $table->foreignId("tag_id")->references("id")->on("tags");
            $table->string("img_path")->nullable();
            $table->foreignId("brand_id")->references("id")->on("brands");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
