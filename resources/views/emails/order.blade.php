<!DOCTYPE html>
<html>
<head>
    <title>Ваш заказ оформлен</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .order-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
            text-align: right;
            font-size: 18px;
            margin-top: 20px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Ваш заказ успешно оформлен!</h1>
    </div>
    
    <div class="order-info">
        <h2>Информация о заказе</h2>
        <p>Уважаемый(ая) {{ $user->name }}, благодарим за ваш заказ!</p>
        <p>Номер заказа: {{ $orderId }}</p>
        <p>Дата заказа: {{ $orderDate }}</p>
    </div>
    
    <h3>Товары в заказе:</h3>
    <table>
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['price'] }} руб.</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="total">
        Итого к оплате: {{ $total }}
    </div>
    
    <div class="footer">
        <p>Если у вас возникли вопросы, пожалуйста, свяжитесь с нами.</p>
        <p>© {{ date('Y') }} The 1 moto. Все права защищены.</p>
    </div>
</body>
</html> 