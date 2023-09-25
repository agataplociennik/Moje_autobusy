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
    Schema::create(MyBus::TABLE, function (Blueprint $table) {
      $table->id();
      $table->string('number');
      //TODO: add per user id
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(): void
  {
    Schema::dropIfExists(MyBus::TABLE);
  }
};
