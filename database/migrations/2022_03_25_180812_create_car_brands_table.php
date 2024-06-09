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
        Schema::create('car_brands', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true)->nullable();
            $table->timestamps();
        });
        Schema::create('car_brand_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_brand_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->unique(['car_brand_id', 'locale']);
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
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
        Schema::dropIfExists('car_brands');
        Schema::dropIfExists('car_brand_translations');
    }
};
