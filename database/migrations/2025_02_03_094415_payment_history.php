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
        Schema::create('payment_history', function (Blueprint $table) {
            $table->integer('billno');
            $table->integer('customer_id');
            $table->integer('balance');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('billno')->references('billno')->on('bill')->onDelete('cascade');
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('payment_history');
    }
};
    