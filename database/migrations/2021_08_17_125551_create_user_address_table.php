<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('company');
            $table->text('county');
            $table->text('city');
            $table->text('lineone');
            $table->text('linetwo');
            $table->text('zipcode');
            $table->enum('action', ['true', 'false']);
            $table->enum('status', ['true', 'false']);
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
        Schema::dropIfExists('user_address');
    }
}
