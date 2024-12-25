<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->id();
            $table->string('gas_station_id');
            $table->string('gas_station_name');
            $table->boolean('is_open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('changes');
    }
};
