<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Обработка заказа и отправка письма пользователю
     */
    public function checkout(Request $request)
    {
        $data = $request->json()->all();

        if (isset($data['cart']) && isset($data['total'])) {
            // Получаем текущего авторизованного пользователя
            $user = Auth::user();
            
            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Пользователь не авторизован',
                ], 401);
            }

            $cart = $data['cart'];
            $total = $data['total'];

            // Отправляем письмо пользователю
            Mail::to($user->email)->send(new OrderMail($user, $cart, $total));

            // Здесь можно добавить логику сохранения заказа в базу данных
            
            return response()->json([
                'status' => 'success',
                'message' => 'Заказ успешно оформлен! Письмо отправлено на вашу почту.',
                'cart' => $cart,
                'total' => $total,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Недостаточно данных',
        ], 400);
    }
}