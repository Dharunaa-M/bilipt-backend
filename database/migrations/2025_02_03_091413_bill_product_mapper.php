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
        Schema::create('bill_product_mapper', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('billno');
            $table->integer('pdt_id');
            $table->integer('qty');
            $table->timestamps();
        });

        // Foreign key relationships
        Schema::table('bill_product_mapper', function (Blueprint $table) {
            $table->foreign('billno')->references('billno')->on('bill')->onDelete('cascade');
            $table->foreign('pdt_id')->references('pdt_id')->on('product')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('bill_product_mapper');
    }
};
    