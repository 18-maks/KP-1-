<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class CheckoutController extends Controller
// {
//     public function checkout(Request $request)
//     {
//         $data = $request->json()->all();

//         if (isset($data['cart']) && isset($data['total'])) {

//             $cart = $data['cart'];
//             $total = $data['total'];

//             return response()->json([
//                 'status' => 'success',
//                 'message' => 'Заказ успешно оформлен!',
//                 'cart' => $cart,
//                 'total' => $total,
//             ]);
//         }

//         return response()->json([
//             'status' => 'error',
//             'message' => 'Недостаточно данных',
//         ], 400);
//     }
// }