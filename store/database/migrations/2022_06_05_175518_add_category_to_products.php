<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToProducts extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('products', function (Blueprint $table) {
      if (Schema::hasColumn('category', 'categories_id')) {
        $table->dropConstrainedForeignId('categories_id');
        $table->dropForeign(['categories_id']);
        $table->dropColumn('categories_id');
      }
      $table->foreignId('categories_id')->nullable()->constrained()->default(Null);
      //
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('products', function (Blueprint $table) {
      //
      // $table->dropConstrainedForeignId('categories_id');
      if (Schema::hasColumn('category', 'categories_id')) {
        $table->dropForeign(['categories_id']);
        $table->dropColumn('categories_id');
      }
    });
  }
}
