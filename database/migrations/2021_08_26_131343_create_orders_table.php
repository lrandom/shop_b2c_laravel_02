<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->double('sub_total');//tổng tiền hàng chưa thuế
            $table->float('tax');//phần trăm thuế
            $table->longText('note');
            $table->string('address');
            $table->string('phone');
            $table->string('name');
            $table->tinyInteger('status')->default(1); //1=Pending, 2=Processing, 3= Sent, 4=Received, 5= Cancel
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
        Schema::dropIfExists('orders');
    }
}
