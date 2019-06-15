<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('category')) Schema::create('category', function(Blueprint $table) {
            $table->increments('id')->unsignet();
            $table->unsignedInteger('parent_id')->nullable()->index('category_parent_id_foreign');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('sort')->nullable()->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('category')) Schema::drop('category');
    }
}
