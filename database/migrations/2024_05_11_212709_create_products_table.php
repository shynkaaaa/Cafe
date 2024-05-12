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
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->decimal('default_price', 10);
            $table->string('default_size');
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        // Coffees
        DB::table('products')->insert([
            [
                'name' => 'Эспрессо',
                'type' => 'coffee',
                'default_price' => 600,
                'default_size' => 'basic',
                'description' => 'Классический итальянский напиток, приготовленный путем прокачивания горячей воды через обжаренные и измельченные кофейные зерна. Эспрессо обладает богатым ароматом и интенсивным вкусом. Он идеально подходит для тех, кто предпочитает сильный кофейный напиток.',
                'image_url' => 'https://www.pngall.com/wp-content/uploads/4/Cafe-Espresso.png'
            ],
            [
                'name' => 'Американо',
                'type' => 'coffee',
                'default_price' => 600,
                'default_size' => 'basic',
                'description' => 'Напиток, похожий на эспрессо, но с добавлением горячей воды. Это делает его более разбавленным и менее интенсивным по вкусу, чем чистое эспрессо. Американо отлично подходит для любителей более мягкого кофе.',
                'image_url' => 'https://png.pngtree.com/png-vector/20230413/ourmid/pngtree-americano-coffee-beans-transparent-white-background-png-image_6698453.png'
            ],
            [
                'name' => 'Латте',
                'type' => 'coffee',
                'default_price' => 700,
                'default_size' => 'basic',
                'description' => 'Кофейный напиток, приготовленный из эспрессо и горячего молока. Латте обладает нежным вкусом и кремовой текстурой. Он часто подается с молочной пенкой и может быть украшен корицей или шоколадной посыпкой.',
                'image_url' => 'https://static.vecteezy.com/system/resources/previews/009/887/177/non_2x/hot-coffee-latte-cup-free-png.png'
            ],
            [
                'name' => 'Каппучино',
                'type' => 'coffee',
                'default_price' => 700,
                'default_size' => 'basic',
                'description' => 'Еще один популярный кофейный напиток, состоящий из эспрессо, горячего молока и молочной пенки. Каппучино имеет более насыщенный вкус и более пышную текстуру благодаря молочной пенке.',
                'image_url' => 'https://pngimg.com/d/cappuccino_PNG27.png'
            ],
            [
                'name' => 'Моккачино',
                'type' => 'coffee',
                'default_price' => 800,
                'default_size' => 'basic',
                'description' => 'Напиток, похожий на каппучино, но с добавлением шоколадного сиропа или какао порошка. Моккачино обладает богатым шоколадным вкусом и может быть подан с шоколадной посыпкой или кремом на вершине.',
                'image_url' => 'https://static.vecteezy.com/system/resources/previews/036/160/719/original/ai-generated-mocha-by-a-combination-of-espresso-steamed-milk-and-chocolate-with-transparent-background-free-png.png'
            ],
        ]);

        // Teas
        DB::table('products')->insert([
            [
                'name' => 'Чёрный чай',
                'type' => 'tea',
                'default_price' => 300,
                'default_size' => 'basic',
                'description' => 'Черный чай - классический напиток, обладающий насыщенным вкусом и ароматом. Он прекрасно подходит для тех, кто ценит традиционные чайные напитки.',
                'image_url' => 'https://static.vecteezy.com/sys
                tem/resources/previews/000/968/249/non_2x/vector-black-tea-leaf-illustration.png'
            ],
            [
                'name' => 'Зелёный чай',
                'type' => 'tea',
                'default_price' => 350,
                'default_size' => 'basic',
                'description' => 'Зеленый чай - напиток с нежным ароматом и освежающим вкусом. Он обладает множеством полезных свойств и прекрасно подходит для любителей более легких и освежающих напитков.',
                'image_url' => 'https://png.pngtree.com/png-clipart/20190921/original/pngtree-cup-of-green-tea-png-image_4958581.jpg'
            ],
            [
                'name' => 'Мятный чай',
                'type' => 'tea',
                'default_price' => 350,
                'default_size' => 'basic',
                'description' => 'Мятный чай - освежающий напиток с мятным ароматом и вкусом. Он прекрасно подходит для утреннего освежения или послеобеденного расслабления.',
                'image_url' => 'https://png.pngtree.com/png-vector/20240226/ourmid/pngtree-green-tea-cup-with-mint-leaves-png-image_11876752.png'
            ],
            [
                'name' => 'Имбирный чай',
                'type' => 'tea',
                'default_price' => 400,
                'default_size' => 'basic',
                'description' => 'Имбирный чай - напиток с ярким ароматом имбиря и легкой пряностью. Он обладает тонизирующими свойствами и прекрасно согревает в холодные дни.',
                'image_url' => 'https://naturalwaycafe.com/shop/wp-content/uploads/2019/07/Organic_ginger_tea-1.png'
            ],
            [
                'name' => 'Фруктовый чай',
                'type' => 'tea',
                'default_price' => 400,
                'default_size' => 'basic',
                'description' => 'Фруктовый чай - освежающий напиток с ярким ароматом фруктов и ягод. Он прекрасно подходит для любителей натуральных и ароматных напитков.',
                'image_url' => 'https://pngimg.com/uploads/tea/tea_PNG98912.png'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
