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
        Schema::table('sliders', function (Blueprint $table) {
            //
            $table->dropColumn('image');
            $table
              ->string('image_ar')
              ->nullable()
              ->after('desc_en');
              $table
              ->string('image_en')
              ->nullable()
              ->after('image_ar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            //
        });
    }
};
