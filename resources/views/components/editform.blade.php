<form action="{{ route('car.update' , $car) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
      <div class="mb-3">
      <label for="brand" class="form-label">brand</label>
      <input name="brand" type="text" class="form-control"  @error('brand') is-invalid @enderror id="brand" value={{$car->brand}}>   
      @error('brand')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
       
    </div>

    <div class="mb-3">
        <label for="model" class="form-label">model</label>
        <input name="model" type="text" class="form-control"  @error('model') is-invalid @enderror id="model" value="{{$car->model}}"> 
        @error('model')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror             
      </div>

      <div class="mb-3">
        <label for="year" class="form-label">year</label>
        <input name="year" type="number" class="form-control"  @error('year') is-invalid @enderror id="year" value="{{$car->year}}"> 
        @error('year')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror             
      </div>

      <div class="mb-3">
        <label for="km" class="form-label">km</label>
        <input name="km" type="number" class="form-control"  @error('km') is-invalid @enderror id="km" value="{{$car->km}}">
        @error('km')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror              
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input name="price" type="number" class="form-control" @error('price') is-invalid @enderror id="price" value="{{$car->price}}">
        @error('price')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror              
      </div>

      <div class="mb-3">
        <label for="img" class="form-label">img</label>
        <input name="img" type="file" class="form-control" id="img">              
      </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>