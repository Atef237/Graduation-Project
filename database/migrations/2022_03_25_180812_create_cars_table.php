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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true)->nullable();
            $table->text('manufacturing_year')->nullable();
            $table->text('license_number')->nullable();
            $table->text('driver_phone')->nullable();
            $table->text('day_rent_price')->nullable();
            $table->foreignId("city_id")->constrained("cities")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("country_id")->constrained("countries")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("car_brand_id")->constrained("car_brands")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("car_type_id")->constrained("car_types")->references("id")->onUpdate("cascade")->onDelete("cascade");


            $table->timestamps();
        });
        Schema::create('car_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('driver_name')->nullable();
            $table->longText('description')->nullable();
            $table->unique(['car_id', 'locale']);
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
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
        Schema::dropIfExists('cars');
        Schema::dropIfExists('car_translations');
    }
};
