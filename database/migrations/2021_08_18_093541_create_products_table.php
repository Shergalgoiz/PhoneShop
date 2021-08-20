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
            $table->id()->autoIncrement()->unsigned();
            $table->string('name', 100);
            // $table->integer('id_type'); khóa ngoại của id bên bảng Product_types
            $table->text('description');
            $table->double('unit_price');
            $table->double('promotion_price');
            $table->string('image', 255);
            $table->string('unit',255);
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
        Schema::dropIfExists('products');
    }
}
