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
        Schema::create('car_types', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true)->nullable();
            $table->timestamps();
        });
        Schema::create('car_type_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_type_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->unique(['car_type_id', 'locale']);
            $table->foreign('car_type_id')->references('id')->on('car_types')->onDelete('cascade');
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
        Schema::dropIfExists('car_types');
        Schema::dropIfExists('car_type_translations');
    }
};
