<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('city_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('company');
            $table->string('location');
            $table->string('logo');
            $table->string('is_active')->default(true);
            $table->boolean('is_highlighted')->default(false);
            $table->text('content');
            $table->string('apply_link');
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
        Schema::dropIfExists('listings');
    }
}
