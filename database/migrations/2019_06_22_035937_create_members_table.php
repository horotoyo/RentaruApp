<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
          $table->string('id', 15);
          $table->string('nik',16);
          $table->string('name',50);
          $table->string('address');
          $table->boolean('gender');
          $table->string('birth_of_place');
          $table->date('date_of_birth');
          $table->string('number_phone',15);
          $table->string('email')->unique();
          $table->timestamps();
          
          $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
