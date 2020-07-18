<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodaySpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('today_specials', function (Blueprint $table) {
            $table->bigIncrements('today_special_id');
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
        Schema::dropIfExists('today_specials');
    }
}
