<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsPropertiesPropertiesValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products_properties_properties_values')) Schema::create('products_properties_properties_values', function(Blueprint $table) {
            $table->increments('id')->unsignet();
            $table->unsignedInteger('property_id')->nullable()->index('products_properties_properties_values_property_id_foreign');
            $table->unsignedInteger('product_id')->nullable()->index('products_properties_properties_values_product_id_foreign');
            $table->unsignedInteger('products_properties_values_id')->nullable()->index('products_properties_properties_values_property_value_id_foreign');
        });

        if (Schema::hasTable('products_properties_properties_values')) Schema::table('products_properties_properties_values', function(Blueprint $table) {
            $table->foreign('property_id', 'products_properties_properties_values_property_id_foreign')->references('id')->on('products_properties')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('products_properties_values_id', 'products_properties_properties_values_property_value_id_foreign')->references('id')->on('products_properties_values')->onUpdate('NO ACTION')->onDelete('RESTRICT');
            $table->foreign('product_id', 'products_properties_properties_values_product_id_foreign')->references('id')->on('products')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('products_properties_properties_values')) Schema::table('products_properties_properties_values', function(Blueprint $table) {
            $table->dropForeign('products_properties_properties_values_property_id_foreign');
            $table->dropForeign('products_properties_properties_values_product_id_foreign');
            $table->dropForeign('products_properties_properties_values_property_value_id_foreign');
        });

        if (Schema::hasTable('products_properties_properties_values')) Schema::drop('products_properties_properties_values');
    }
}
