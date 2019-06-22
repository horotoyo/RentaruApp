<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_id')->references('id')->on('members');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('payment_id');
            $table->string('payment_status');
            $table->string('email')->nullable();
            $table->integer('total')->nullable();
            $table->integer('discount')->nullable();
            $table->date('time_periode');
            $table->timestamps();
            $table->foreign('payment_id')->references('id')->on('payment_orders')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
