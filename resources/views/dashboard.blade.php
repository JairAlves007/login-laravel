<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pirulito.debug</title>
</head>
<body>
    {{-- {{ dd($user) }} --}}
    {{-- {{ dd($user->nivel_id) }} --}}
    {{-- {{ $nivel }} --}}

    {{-- {{ dd($nivel) }} --}}

    <p>Seu nome é {{ $user->name }}. Sua Função sistema será de {{ $nivel }}</p>

    <form action="/logout" method="POST">
        @csrf
        <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
    </form>
</body>
</html>