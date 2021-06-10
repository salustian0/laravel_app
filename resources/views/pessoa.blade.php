<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <a href="{{$url}}">Listagem completa</a><br/>
    <a href="{{$url}}/show-user">Mostrar 1 usuario</a><br/>
    <a href="{{$url}}/api/show">Api</a><br/>


@if(isset($pessoas) && count($pessoas))
        <table class="table">
            <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Documento</th>
            <th>Tipo de documento</th>
            <th>Contato</th>
            </thead>
            <tbody>
            @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa['name']}}</td>
                <td>{{$pessoa['surname']}}</td>
                <td>{{$pessoa['email']}}</td>
                <td>{{$pessoa['docNumber']}}</td>
                <td>{{$pessoa['typeDoc']}}</td>
                <td>{{$pessoa['phone']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
