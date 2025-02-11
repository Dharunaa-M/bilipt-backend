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
        Schema::create('purchase', function (Blueprint $table) {
            $table->integer('purchase_id')->primary();
            $table->timestamp('purchase_date')->useCurrent();
            $table->enum('purchase_category', ['electronics', 'clothing', 'furniture', 'grocery']); // Adjust categories as needed
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('purchase');
    }
};
    