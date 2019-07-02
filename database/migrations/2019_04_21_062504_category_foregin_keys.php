<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryForeginKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('category')) Schema::table('category', function(Blueprint $table) {
            $table->foreign('parent_id', 'category_parent_id_foreign')->references('id')->on('category')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('category')) Schema::table('category', function(Blueprint $table) {
            $table->dropForeign('category_parent_id_foreign');
        });
    }
}
