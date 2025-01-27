<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('sliders', function (Blueprint $table) {
      //
      $table
        ->string('subscribe_text')
        ->nullable()
        ->after('subscribe_link');
      $table
        ->string('download_text')
        ->nullable()
        ->after('download_link');
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
