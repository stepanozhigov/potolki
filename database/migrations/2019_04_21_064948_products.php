<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) Schema::create('products', function(Blueprint $table) {
            $table->increments('id')->unsignet();
            $table->unsignedInteger('category_id')->nullable()->index('products_category_id_foreign');
            $table->unsignedInteger('manufacturer_id')->nullable()->index('products_manufacturer_id_foreign');
            $table->string('name')->nullable();
            $table->string('model')->nullable();
            $table->string('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('description', 50000)->nullable();
            $table->text('description_short', 500)->nullable();
            $table->integer('sort')->nullable()->default(100);
            $table->decimal('rating')->nullable()->default(0);
            $table->decimal('price')->nullable()->default(0);
            $table->decimal('discount')->nullable()->default(0);
            $table->timestamps();
        });

        if (Schema::hasTable('products')) Schema::table('products', function(Blueprint $table) {
            $table->foreign('category_id', 'products_category_id_foreign')->references('id')->on('category')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign('manufacturer_id', 'products_manufacturer_id_foreign')->references('id')->on('manufacturers')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('products')) Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_category_id_foreign');
            $table->dropForeign('products_manufacturer_id_foreign');
        });

        if (Schema::hasTable('products')) Schema::drop('category');
    }
}
