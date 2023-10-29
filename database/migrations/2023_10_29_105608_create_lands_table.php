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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name')->unique();
            $table->string('owner_email')->nullable();
            $table->string('owner_phone')->nullable();

            $table->foreignId('country_id')->nullable();
            $table->foreignId('location_id')->nullable();
            $table->foreignId('area_id')->nullable();
            $table->string('address')->nullable();

            $table->string('details')->nullable();
            $table->string('status')->nullable();

            $table->string('road_width')->nullable();
            $table->string('size')->nullable();


            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
