<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>register</h1>
    <form action="{{route('Hanselregister')}}" method="post">
        @csrf
        <input type="text" name="name" >
        <br>
        <br>
    <input type="email" name="email" id="">
    <br>
    <br>
    <input type="password" name="password">
    <input type="submit" value="">
    </form>
</body>
</html>
