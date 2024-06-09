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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->foreignId("admin_id")->constrained("admins")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("updated_by")->nullable()->constrained("admins")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("client_id")->constrained("clients")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("package_id")->nullable()->constrained("packages")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("hotel_id")->constrained("hotels")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("room_id")->nullable()->constrained("rooms")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("car_id")->nullable()->constrained("cars")->references("id")->onUpdate("cascade")->onDelete("cascade");
            $table->integer("residence_days")->nullable();
            $table->enum('status',['pending','canceled','done','under_enquiry','query_done','rejected','approved'])->nullable();
            $table->enum('type',['package','regular'])->nullable();
            $table->double('total_price')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
