<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_item', function (Blueprint $table) {
            $table->bigIncrements('combo_item_id');
            $table->unsignedBigInteger('combo_id_fk');
            $table->foreign('combo_id_fk')->references('combo_id')->on('combos');
            $table->unsignedBigInteger('item_id_fk');
            $table->foreign('item_id_fk')->references('item_id')->on('items');
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
        Schema::dropIfExists('combo_items');
    }
}
