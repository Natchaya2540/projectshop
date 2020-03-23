<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
                $table->bigIncrements('id');
                $table->string('name');
                $table->decimal('cost',8,2);
                $table->decimal('quantity');
                $table->string('image')->nullable();
                $table->bigInteger('product_type_id')->unsigned();
                $table->timestamps();
                $table->foreign('product_type_id')->references('id')->on('product_types');
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
