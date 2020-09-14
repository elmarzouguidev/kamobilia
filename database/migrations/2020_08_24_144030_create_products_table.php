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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('photo');
            $table->string('photos')->nullable();
            $table->longText('description');
            $table->text('excerpt')->nullable();
            $table->string('prix');
            $table->integer('qte')->nullable();
            $table->boolean('hasPromo')->default(false);
            $table->boolean('inHome')->default(false);
            $table->boolean('personalized')->default(false);
            $table->boolean('inStock')->default(true);
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->bigInteger('brand_id')->nullable()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

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
