<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_order', function (Blueprint $table) {
            $table->bigIncrements('item_order_id');
            $table->unsignedBigInteger('order_id_fk');
            $table->foreign('order_id_fk')->references('order_id')->on('orders');
            $table->unsignedBigInteger('item_id_fk');
            $table->foreign('item_id_fk')->references('item_id')->on('items');
            $table->integer('quantity');
            $table->integer('price');
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
        Schema::dropIfExists('item_orders');
    }
}
