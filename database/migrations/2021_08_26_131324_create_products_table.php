<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->integer('category_id');
            $table->bigInteger('user_id');
            $table->mediumText('short_desc'); // mô tả ngắn về sp
            $table->mediumText('tag_line');//dòng qc về sản phẩm
            $table->longText('content');//Mô tả về sp
            $table->bigInteger('discount_id');
            $table->mediumText('seo_keyword');
            $table->mediumText('seo_description');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
