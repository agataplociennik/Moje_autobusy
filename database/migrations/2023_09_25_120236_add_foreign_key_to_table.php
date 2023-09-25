<?php

use App\Models\MyBus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(): void
  {
    Schema::table(MyBus::TABLE, function (Blueprint $table) {
      $table->foreign('user_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(): void
  {
    Schema::table(MyBus::TABLE, function (Blueprint $table) {
      $table->dropForeign('user_id');
    });
  }
};
