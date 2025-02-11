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
    public function up():void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->string('username')->unique();
            $table->string('userpwd');
            $table->enum('type', ['U', 'A']); // 'U' for User, 'A' for Admin
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('user');
    }
};

  