<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_order', function (Blueprint $table) {
            $table->bigIncrements('combo_order_id');
            $table->unsignedBigInteger('order_id_fk');
            $table->foreign('order_id_fk')->references('order_id')->on('orders');
            $table->unsignedBigInteger('combo_id_fk');
            $table->foreign('combo_id_fk')->references('combo_id')->on('combos');
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
        Schema::dropIfExists('combo_orders');
    }
}
