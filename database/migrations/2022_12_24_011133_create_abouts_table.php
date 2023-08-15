<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visi', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->timestamps();
        });
        Schema::create('misi', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->timestamps();
        });
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->timestamps();
        });
        Schema::create('structural', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('opd', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->timestamps();
        });
        Schema::create('smart_cities', function (Blueprint $table) {
            $table->id();
            $table->text('body');
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
        Schema::dropIfExists('visi');
        Schema::dropIfExists('misi');
        Schema::dropIfExists('about');
        Schema::dropIfExists('structural');
        Schema::dropIfExists('opd');
        Schema::dropIfExists('smart_cities');
    }
}
