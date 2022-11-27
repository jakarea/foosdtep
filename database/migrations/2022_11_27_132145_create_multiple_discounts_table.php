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
        Schema::create('multiple_discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('value')->default('0');
            $table->enum('type', ['percentage', 'numeric'])->default('percentage');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('product_id')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('multiple_discounts');
    }
};
