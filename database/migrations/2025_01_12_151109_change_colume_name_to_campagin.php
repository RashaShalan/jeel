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
    Schema::table('campigns', function (Blueprint $table) {
      //
      $table->dropColumn('name');
      $table
        ->string('name_ar')
        ->nullable()
        ->after('id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('campign', function (Blueprint $table) {
      //
    });
  }
};