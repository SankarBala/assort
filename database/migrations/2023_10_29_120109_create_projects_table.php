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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->foreignId('location_id')->nullable();
            $table->foreignId('area_id')->nullable();
            $table->foreignId('country_id')->default(1);
            $table->string('flat_size')->nullable();
            $table->string('parking')->nullable();
            $table->string('height')->nullable();
            $table->string('lift')->nullable();
            $table->string('substation')->nullable();
            $table->string('generator')->nullable();
            $table->string('unit')->nullable();
            $table->string('land_area')->nullable();
            $table->string('extra_1')->nullable();
            $table->string('extra_2')->nullable();
            $table->string('extra_3')->nullable();
            $table->string('hand_over')->nullable();
            $table->string('details')->nullable();
            $table->string('photo')->nullable();
            $table->string('created_by')->default(1);
            $table->string('updated_by')->default(1);
            $table->string('featured')->default(0);
            $table->integer('views')->default(0);
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
