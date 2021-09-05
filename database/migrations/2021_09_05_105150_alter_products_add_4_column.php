<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsAdd4Column extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('variant_value_products', function (Blueprint $table) {
            $table->bigInteger('product_id');
            $table->bigInteger('variant_value_id');
            $table->bigInteger('variant_id');
            $table->string('variant_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('variant_value_products', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('variant_value_id');
            $table->dropColumn('variant_id');
            $table->dropColumn('variant_name');
        });
    }
}
