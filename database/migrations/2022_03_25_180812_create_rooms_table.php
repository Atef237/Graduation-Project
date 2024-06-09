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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true)->nullable();
            $table->integer('floor_number')->nullable();
            $table->integer('beds_number')->nullable();
            $table->boolean('is_children_available')->default(true)->nullable();
            $table->double('night_price')->nullable();
            $table->foreignId("hotel_id")->constrained("hotels")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("room_category_id")->constrained("room_categories")->references("id")->onUpdate("cascade")->onDelete("cascade");


            $table->timestamps();
        });
        Schema::create('room_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->unique(['room_id', 'locale']);
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('room_translations');
    }
};
