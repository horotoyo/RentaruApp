<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('type_id');
            $table->string('merk',50);
            $table->string('seri',10);
            $table->string('serial_number',50);
            $table->string('product_code',20);
            $table->string('status');
            $table->string('source')->nullable();
            $table->enum('condition',['baru','seken','rusak','hilang']);
            $table->integer('price');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('type_products')->onDelete('cascade');
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
