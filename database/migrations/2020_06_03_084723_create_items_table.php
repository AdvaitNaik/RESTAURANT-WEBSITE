<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('item_name');
            $table->string('item_image');
            $table->integer('item_price');
            $table->integer('item_rating');
            $table->string('item_description');
            $table->integer('availability');
            $table->unsignedBigInteger('cuisine_id_fk');
            $table->foreign('cuisine_id_fk')->references('cuisine_id')->on('cuisines');
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
        Schema::dropIfExists('items');
    }
}
