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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->string('name');
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->string('short_description');
            $table->enum('unit_of_measure', [
                'kg',
                'g',
                'mg',
                'l',
                'ml',
                'm',
                'mm',
                'cm',
                'km',
                'unidad',
                'caja',
                'paquete',
                'rollo',
                'gal',
                'oz',
                'lb',
                'm2',
                'm3',
                '',
            ]);
            $table->boolean('is_active');
            $table->decimal('cost_price');
            $table->decimal('sale_price');
            $table->Integer('stock_quantily');
            $table->Integer('min_stock_level');
            $table->Integer('max_stock_level');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
