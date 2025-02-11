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
        Schema::create('product', function (Blueprint $table) {
            $table->integer('pdt_id')->primary();
            $table->string('pdt_name');
            $table->enum('pdt_category', ['electronics', 'clothing', 'furniture', 'grocery']);  // Adjust categories as needed
            $table->string('brandname');
            $table->integer('baseprice');
            $table->integer('salesrate');
            $table->string('unitname');
            $table->integer('tax_id');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('product');
    }
};
   