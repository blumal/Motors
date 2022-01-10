<!DOCTYPE html>
<html>
  <head>
    <title>Cars Index</title>
  </head>
  <body>
    @foreach ($cars as $car)
    
    <h1>Car {{ $car->id }}</h1>
    
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
      
        <form action="{{url('cars/'.$car->id)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <input type="submit" value="Eliminar coche de la BBDD">
        </form>
      
    </ul>

    @endforeach

  </body>
</html>