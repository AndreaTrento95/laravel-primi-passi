<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <a href="/prodotti">Prodotti</a>
  <a href="/contatti">Contatti</a>


  <h1>Hello World!</h1>
  <h2>Ciao {{$name}} {{$lastname}}</h2>

  

  @if ($name === 'Andrea')
    <p>Il nome inserito è esatto</p>
    @else
    <p>Il nome inserito non è corretto</p> 
  @endif

  

  <h2>Hobbies:</h2>
  <ul>
    @foreach ($hobbies as $hobby)
    <li>
      {{$hobby}}
    </li>
    @endforeach
  </ul>
</body>
</html>