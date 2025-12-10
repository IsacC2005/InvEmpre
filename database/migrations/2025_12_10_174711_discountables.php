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
        Schema::create('discountable', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->string('discountable_type');
            $table->integer('discountable_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
