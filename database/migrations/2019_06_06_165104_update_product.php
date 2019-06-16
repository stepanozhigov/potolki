<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('products')) Schema::table('products', function (Blueprint $table) {
            $table->string('xml_id')->nullable();
            $table->decimal('price_ussuriysk', 8, 2)->nullable();
            $table->decimal('price_vladivostok', 8, 2)->nullable();
            $table->decimal('price_nakhodka', 8, 2)->nullable();
            $table->decimal('price_blagoveshchensk', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('products')) Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['xml_id', 'price_ussuriysk', 'price_vladivostok', 'price_nakhodka', 'price_blagoveshchensk']);
        });
    }
}
