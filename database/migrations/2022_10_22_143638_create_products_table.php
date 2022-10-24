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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('price')->nullable();
            $table->string('cat_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('prodcut_group_id')->nullable();
            $table->string('faith_id')->nullable();
            $table->string('line_id')->nullable();
            $table->string('content_id')->nullable();
            $table->string('allergens_dp_id')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('sku_code')->unique();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('specific_description')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('image')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
};
