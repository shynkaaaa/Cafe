<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products_default_additions', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('addition_id')->constrained()->onDelete('cascade');
            $table->primary(['product_id', 'addition_id']);
        });
        DB::table('products_default_additions')->insert([
            [
                'product_id' => 3,
                'addition_id' => 8,
            ],
            [
                'product_id' => 4,
                'addition_id' => 8,
            ],
            [
                'product_id' => 5,
                'addition_id' => 8,
            ],
            [
                'product_id' => 5,
                'addition_id' => 2,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_default_additions');
    }
};
