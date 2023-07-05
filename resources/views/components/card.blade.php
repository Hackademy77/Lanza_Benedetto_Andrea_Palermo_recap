<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($car->img)}}" class="card-img-top" alt="{{$car->brand}}">
    <div class="card-body">
      <h5 class="card-title">Brand:{{$car->brand}}</h5>
      <p class="card-text">Model:{{$car->model}}</p>
      <p class="card-text">KM:{{$car->km}}</p>
      <p class="card-text">Year:{{$car->year}}</p>
      <p class="card-text">Price:{{$car->price}}</p>
      <a href="{{route('car.show' , $car)}}" class="btn btn-primary">Dettagli</a>
      <a href="{{route('car.edit' , $car)}}" class="btn btn-warning">Modifica</a>
    
     
    </div>
  </div>