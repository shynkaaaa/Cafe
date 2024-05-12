<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items_additions', function (Blueprint $table) {
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->foreignId('addition_id')->constrained()->onDelete('cascade');
            $table->primary(['item_id', 'addition_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_additions');
    }
};
