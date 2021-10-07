<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_child', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->text('link');
            $table->text('icon')->nullable();
            $table->integer('child')->nullable();
            $table->integer('location');
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
        Schema::dropIfExists('menu_child');
    }
}
