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
        Schema::create('table_campign', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('main_title_ar');
            $table->string('main_title_en');
            $table->text('main_details_ar');
            $table->text('main_details_en');
            $table->string('main_image');
            $table->string('sub_title_ar');
            $table->string('sub_title_en');
            $table->text('sub_details_ar');
            $table->text('sub_details_en');
            $table->string('sub_image');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_campign');
    }
};
