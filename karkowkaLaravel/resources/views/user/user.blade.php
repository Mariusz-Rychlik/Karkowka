<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="UserControllerForm" method="get">
        <input type="text" name="imie" id="imie"><br><br>
        @error ("imie")
        {{$message}}
        @enderror
        <input type="email" name="email" id="email"><br><br>
        @error ("imie")
        {{$message}}
        @enderror
        <input type="submit" value="Wyslij">
        @error ("imie")
        {{$message}}
        @enderror
    </form>
    @if($errors->any())
        <ol>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ol>
    @endif
</body>
</html>
