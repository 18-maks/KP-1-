<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка почты</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Отправить письмо</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('send.mail') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" name="name" class="form-control" placeholder="Введите ваше имя" required>
            </div>
            <div class="form-group">
                <label for="email">Ваш email</label>
                <input type="email" name="email" class="form-control" placeholder="Введите ваш email" required>
            </div>
            <div class="form-group">
                <label for="message">Ваше сообщение</label>
                <textarea name="message" class="form-control" rows="5" placeholder="Введите ваше сообщение" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>