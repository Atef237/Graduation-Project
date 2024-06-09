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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true)->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->text('info')->nullable();
            $table->foreignId("city_id")->constrained("cities")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("country_id")->constrained("countries")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("hotel_category_id")->constrained("hotel_categories")->references("id")->onUpdate("cascade")->onDelete("cascade");


            $table->timestamps();
        });
        Schema::create('hotel_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->unique(['hotel_id', 'locale']);
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
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
        Schema::dropIfExists('hotels');
        Schema::dropIfExists('hotel_translations');
    }
};
