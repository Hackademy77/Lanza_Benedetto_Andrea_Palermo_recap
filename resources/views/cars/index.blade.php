<x-layout>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Tutti gli annunci presenti</h1>
            </div>
            <div class="container">
                <div class="row m-5">
                @foreach ($cars as $car)
                <div class="col-12 col-md-3">
                    <x-card
                        :car="$car"
                     />
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
    
    </x-layout>