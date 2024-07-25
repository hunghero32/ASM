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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id'); // Đảm bảo kiểu dữ liệu của cột
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->integer('total'); // Tổng số tiền của hóa đơn
            $table->date('invoice_date'); // Ngày phát hành hóa đơn
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
