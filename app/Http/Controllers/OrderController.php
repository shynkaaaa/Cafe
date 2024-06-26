<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Addition;
use App\Models\Order;
use App\Models\Item;

class OrderController extends Controller
{

    public function getMenu()
    {
        $products = Product::with(['defaultAdditions:id,name,type,price'])->get();

        return response()->json($products);
    }

    public function getProductInfo($product_id)
    {
        $product = Product::findOrFail($product_id);

        $additions = Addition::where('for', $product->type)->get();

        return response()->json([
            'description' => $product->description,
            'additions' => $additions
        ]);
    }

    public function createOrder(Request $request)
    {
        $requestData = $request->json()->all();

        $order = new Order();
        $order->total_price = 0;
        $order->save();

        $totalPrice = 0;

        foreach ($requestData as $data) {
            $item = new Item();
            $item->product_id = $data['product_id'];

            switch ($data['size']) {
                case 'medium':
                    $sizeP = 50;
                    break;
                case 'large':
                    $sizeP = 100;
                    break;
                default:
                    $sizeP = 0;
            }
            $item->price = $data['price'] + $sizeP;
            $item->size = $data['size'];
            $item->order_id = $order->id;
            $item->save();

            // Учет цены товара в общей сумме заказа
            $totalPrice += $item->price;

            if (isset($data['toppings_id'])) {
                $item->additions()->sync($data['toppings_id']);
            }
        }

        $order->total_price = $totalPrice;
        $order->save();

        return response()->json([
            'order_id' => $order->id,
            'total_price' => $order->total_price
        ]);
    }
}
