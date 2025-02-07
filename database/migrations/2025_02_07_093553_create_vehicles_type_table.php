<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles_type', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->decimal('base_fee');
            $table->decimal('aditional_base_fee');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('vehicles_type');
    }
};
