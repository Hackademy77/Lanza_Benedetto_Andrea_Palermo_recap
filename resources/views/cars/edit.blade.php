<x-layout>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12 col-md-6">
                <h1>Modifica annuncio</h1>

            </div>
            <form action="{{ route('car.delete', $car) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
        </div>
    </div>
   
   
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <x-editform
                :car="$car"

                />
            </div>
        </div>
    </div>
</x-layout>

    