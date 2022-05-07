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
        Schema::create('product_shops', function (Blueprint $table) {
            $table->id();
            $table->string('store')->nullable();            //ร้านค้า
            $table->string('picture')->nullable();          //รุปภาพ
            $table->string('Product_code')->nullable();     //รหัสสินค้า
            $table->string('price')->nullable();            //ราคา
            $table->string('Warranty')->nullable();         //การรับประกัน 
            $table->string('total_amount')->nullable();     //จำรวลเงินทั้งหมด   
            $table->string('percent')->nullable();          //เปอร์เช็นต์
            $table->string('income')->nullable();           //รายได้
            $table->string('payment_status')->nullable();   //สถานะการชำระ
            $table->string('status_user')->nullable();      //สถานะ user
            $table->string('Out_of_stock_user')->nullable(); //สถานะสินค้าของ user
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
        Schema::dropIfExists('product_shops');
    }
};
