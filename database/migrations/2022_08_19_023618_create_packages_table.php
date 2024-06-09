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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId("admin_id")->constrained("admins")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("updated_by")->nullable()->constrained("admins")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("hotel_id")->constrained("hotels")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("room_id")->constrained("rooms")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("car_id")->constrained("cars")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->integer("residence_days")->nullable();
            $table->double("price")->nullable();
            $table->string("currency")->nullable();
            $table->dateTime("start_date")->nullable();
            $table->dateTime("expire_date")->nullable();
            $table->timestamps();
        });
        Schema::create('package_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('package_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->unique(['package_id', 'locale']);
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
};
