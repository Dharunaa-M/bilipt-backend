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
        Schema::create('bill', function (Blueprint $table) {
            $table->integer('billno')->primary();
            $table->integer('customer_id');
            $table->integer('amount');
            $table->double('total', 10, 2);
            $table->enum('pay_terms', ['card', 'cash', 'upi']);
            $table->timestamp('date')->useCurrent();
            $table->enum('status', ['paid', 'unpaid']);
            $table->timestamps();

           
        });
    }

    public function down(): void {
        Schema::dropIfExists('bill');
    }
};
  