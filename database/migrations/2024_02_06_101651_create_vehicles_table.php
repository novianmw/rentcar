<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); //->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('vehicle_type_id'); //->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->foreignId('vehicle_brand_id'); //->references('id')->on('vehicle_brands')->onDelete('cascade');
            // $table->foreign('vehicle_type')->references('name')->on('vehicle_types')->onDelete('cascade');
            // $table->foreign('vehicle_brand')->references('name')->on('vehicle_brands')->onDelete('cascade');
            $table->string('model');
            $table->string('slug');
            $table->string('location');
            $table->year('year');
            $table->string('color');
            $table->string('transmission');
            $table->string('fuel');
            $table->integer('seat');
            $table->double('price'); // new
            $table->boolean('is_available')->default(true); // new
            $table->string('image')->nullable(); //new
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
