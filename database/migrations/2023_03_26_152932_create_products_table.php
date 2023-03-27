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
            $table->timestamps();
            $table->string('shipment_number')->nullable();
            $table->string('name');
            $table->string('quantity');
            $table->string('unit')->nullable();
            $table->string('amount');

            $table->string('rec_name');
            $table->string('rec_email');
            $table->string('rec_phone');
            $table->string('rec_address');
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
