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
        Schema::create('tax', function (Blueprint $table) {
            $table->integer('tax_id')->primary();
            $table->enum('rate', [5, 12, 18, 28]);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('tax');
    }
};

    