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
        Schema::create('studios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('branch_id');
            $table->decimal('basic_price', 13, 2);
            $table->decimal('additional_friday_price', 13, 2);
            $table->decimal('additional_saturday_price', 13, 2);
            $table->decimal('additional_sunday_price', 13, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studios');
    }
};
