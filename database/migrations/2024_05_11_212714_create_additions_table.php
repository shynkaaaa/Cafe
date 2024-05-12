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
        Schema::create('additions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('for');
            $table->decimal('price', 10);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
        DB::table('additions')->insert([
            [
                'name' => 'Карамель',
                'type' => 'syrup',
                'for' => 'coffee',
                'price' => 150,
                'image_url' => 'https://www.senzaalcoolshop.it/media/catalog/product/cache/4a5cf70630b9c3080e492221e54d9a9f/o/d/odk-syrup-barista-caramel.png'
            ],
            [
                'name' => 'Шоколадный Сироп',
                'type' => 'syrup',
                'for' => 'coffee',
                'price' => 200,
                'image_url' => 'https://www.alkoholfrittshop.se/media/catalog/product/cache/4a5cf70630b9c3080e492221e54d9a9f/o/d/odk-syrup-barista-chocolate.png'
            ],
            [
                'name' => 'Ванильный Сироп',
                'type' => 'syrup',
                'for' => 'coffee',
                'price' => 200,
                'image_url' => 'https://odkmixers.co.uk/wp-content/uploads/2016/11/Vanilla-Syrup.png'
            ],
            [
                'name' => 'Крем',
                'type' => 'milk',
                'for' => 'coffee',
                'price' => 250,
                'image_url' => 'https://www.mehadrin.com/wp-content/uploads/2021/09/Whipped-Cream.png'
            ],
            [
                'name' => 'Сахар',
                'type' => 'sugar',
                'for' => 'coffee',
                'price' => 50,
                'image_url' => 'https://www.freepnglogos.com/uploads/sugar-png/sugar-march-happily-ever-kate-13.png'
            ],
            [
                'name' => 'Молоко',
                'type' => 'milk',
                'for' => 'coffee',
                'price' => 100,
                'image_url' => 'https://static.vecteezy.com/system/resources/thumbnails/019/550/837/small_2x/milk-bottle-mockup-on-transparent-background-file-png.png'
            ],
            [
                'name' => 'Сахар',
                'type' => 'sugar',
                'for' => 'tea',
                'price' => 50,
                'image_url' => 'https://www.freepnglogos.com/uploads/sugar-png/sugar-march-happily-ever-kate-13.png'
            ],
            [
                'name' => 'Молоко',
                'type' => 'milk',
                'for' => 'tea',
                'price' => 100,
                'image_url' => 'https://static.vecteezy.com/system/resources/thumbnails/019/550/837/small_2x/milk-bottle-mockup-on-transparent-background-file-png.png'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additions');
    }
};
