<!DOCTYPE html>
<html>
<head>
    <title>Новое сообщение</title>
</head>
<body>
    <h1>Новое сообщение от {{ $data['name'] }}</h1>
    <p>Email: {{ $data['email'] }}</p>
    <p>Сообщение: {{ $data['message'] }}</p>
    <p>Сообщение: {{ $data['phone'] }}</p>
    
</body>
</html>