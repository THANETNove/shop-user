<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_outs', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('product_name');
            $table->string('finished_size');
            $table->string('price');
            $table->string('back_piece');
            $table->string('outgrowth')->nullable();
            $table->string('numberCount');
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
        Schema::dropIfExists('buy_outs');
    }
};
