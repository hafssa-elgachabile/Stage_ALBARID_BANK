<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test Mail</title>
    </head>
    <body>
        @foreach ($par as $dd)
        <h1></h1>
        <h1>{{$dd->nom}}</h1>
        <p>http://127.0.0.1:8000/search?p_matricule={{$dd->matricule}}%09&p_chef=&p_formation=</p>
        
        @endforeach
        
    </body>
</html>