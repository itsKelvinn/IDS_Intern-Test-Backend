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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productID')->constrained("products")->onDelete('cascade');
            $table->integer("amount");
            $table->string("productName");
            $table->string("customerName");
            $table->integer("status");
            $table->timestamp("transactionDate")->useCurrent();
            $table->string("createBy");
            $table->timestamp("createOn")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
