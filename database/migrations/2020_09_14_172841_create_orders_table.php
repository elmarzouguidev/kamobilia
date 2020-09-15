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
            $table->string('nom');
            $table->string('prenom');
            $table->string('cartnational')->nullable();
            $table->string('email')->nullable();
            $table->string('tele')->nullable();
            $table->string('ville')->nullable();
            $table->string('address')->nullable();
            $table->longText('message')->nullable();
            $table->string('paymentMethode')->nullable();

            $table->string('totalPrice')->nullable();
            /**************** */
            $table->string('orderNumber')->unique();
            $table->string('productName');
            $table->string('productQte');
            $table->string('productCategory');
            $table->string('productType');
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
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
