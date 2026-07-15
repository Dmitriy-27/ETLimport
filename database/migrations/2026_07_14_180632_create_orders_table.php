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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('g_number')->index();
            $table->timestamp('date');
            $table->date('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->BigInteger('barcode')->nullable();
            $table->decimal('total_price', 10, 2);
            $table->integer('discount_percent');
            $table->string('warehouse_name');
            $table->string('oblast');
            $table->bigInteger('income_id')->nullable();
            $table->string('odid')->nullable();
            $table->bigInteger('nm_id')->nullable();
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->boolean('is_cancel')->default(false);
            $table->timestamp('cancel_dt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
