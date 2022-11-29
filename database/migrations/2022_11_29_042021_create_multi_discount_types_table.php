<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_discount_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_id')->nullable();
            $table->bigInteger('value')->default('0');
            $table->enum('type', ['percentage', 'numeric'])->default('percentage');
            $table->bigInteger('multidiscount_id')->unsigned();
            $table->foreign('multidiscount_id')->references('id')->on('multiple_discounts')->onDelete('cascade');
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
        Schema::dropIfExists('multi_discount_types');
    }
};
