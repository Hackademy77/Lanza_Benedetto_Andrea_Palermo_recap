<x-layout>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Dettaglio annuncio</h1>
            </div>
         
    </div>
    </div>

    <div class="container-fluid">
        <div class="row">
         <div class="col-12 col-md-6"> 
            <img src="{{Storage::url($car->img)}}" class="card-img-top" alt="{{$car->brand}}">
            <h5 class="card-title">Brand:{{$car->brand}}</h5>
            <p class="card-text">Model:{{$car->model}}</p>
            <p class="card-text">KM:{{$car->km}}</p>
            <p class="card-text">Year:{{$car->year}}</p>
            <p class="card-text">Price:{{$car->price}}</p>
       
            {{-- <p>Aggiunto da : {{$car->user->name}}</p> --}}
        </div>
        </div>
    </div>
    
    </x-layout>