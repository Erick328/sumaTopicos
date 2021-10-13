<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operaciones</title>
</head>
<body>
    <form method="POST" action="{{ route('suma.store') }}">
        @csrf
        <label for="">Ingrese numero 1</label><br>
        <input type="number" name="numero1"><br>
        <label for="">Ingrese numero 2</label><br>
        <input type="number" name="numero2"><br>
        <button type="submit">Sumar</button>
    </form>
</body>
</html>