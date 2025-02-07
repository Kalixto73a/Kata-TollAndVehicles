<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
            Schema::create('stations_vehicles', function (Blueprint $table) {
                $table->id();
                $table->foreignId('stations_id')->constrained('stations')->onDelete('cascade');
                $table->foreignId('vehicles_id')->constrained('vehicles')->onDselete('cascade');
                $table->bigInteger('pass_count');
                $table->timestamps();
            });
    }
    public function down(): void
    {
        Schema::dropIfExists('stations_vehicles');
    }
};
