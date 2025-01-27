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
            $table->dropColumn('subscribe_text');
            $table->dropColumn('download_text');

            $table
        ->string('subscribe_text_en')
        ->nullable()
        ->after('subscribe_link');
        $table
        ->string('subscribe_text_ar')
        ->nullable()
        ->after('subscribe_text_en');
      $table
        ->string('download_text_en')
        ->nullable()
        ->after('download_link');
        $table
        ->string('download_text_ar')
        ->nullable()
        ->after('download_text_en');

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
