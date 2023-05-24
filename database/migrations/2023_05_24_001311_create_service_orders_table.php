<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('vehiclePlate', 7);
            $table->dateTime('entryDateTime');
            $table->dateTime('exitDateTime')->default('0001-01-01 00:00:00');
            $table->string('priceType')->nullable();
            $table->decimal('price', 12,2)->default('0.00');
            $table->foreignId('userId')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
