<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateForeignKeyOnCategories extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('categories', function ($table) {
    if (Schema::hasColumn('categories', 'categories_id')) {
        $table->dropForeign(['categories_id']);
      $table->dropColumn('categories_id');
    }

      $table->foreignId('categories_id')->nullable()->default(Null)->constrained();
    });
    //
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('categories', function ($table) {
    if (Schema::hasColumn('categories', 'categories_id')) {
        $table->dropForeign(['categories_id']);
        $table->dropColumn('categories_id');
    }

    $table->foreignId('categories_id')->nullable()->constrained();
    });
  }
}

