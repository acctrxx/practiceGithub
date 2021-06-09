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
            $table->string('name')->unique();
            $table->integer('price');
            $table->date('production_date');
            $table->string('producer');
            $table->enum('machine', ['V - Twins', 'V - 8f']);
            $table->date('expired')->nullable();
            $table->string('description');
            $table->integer('stock');
            $table->string('address');
            $table->string('postcode');
            $table->boolean('status')->default(true);
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
