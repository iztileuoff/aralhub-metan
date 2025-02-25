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
            $table->decimal('lat', 12, 6)->nullable();
            $table->decimal('long', 12, 6)->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_open')->default(false);
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->string('personal_number')->nullable();
            $table->string('telegram_name')->nullable();
            $table->string('telegram_phone')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gas_stations');
    }
};
