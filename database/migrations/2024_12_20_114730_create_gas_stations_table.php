<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('gas_stations', function (Blueprint $table) {
            $table->id();
            $table->string('gas_station_id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->decimal('lat', 12, 6)->nullable();
            $table->decimal('long', 12, 6)->nullable();
            $table->boolean('is_open')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gas_stations');
    }
};
