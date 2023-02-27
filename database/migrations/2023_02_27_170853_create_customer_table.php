<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name',80);
            $table->string('email',80);
            $table->enum('gender', ['male', 'female','other'])->nullable();
            $table->text('Address');
            $table->date('DOB')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
