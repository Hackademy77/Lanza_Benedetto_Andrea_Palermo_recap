<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index' , compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        // $car = Auth::user()->create
            
           Car::create([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'km' => $request->input('km'),
            'price' => $request->input('price'),
            'img' => ($request->file('img') == null) ? 'default.jpg' :
            $request->file('img')->store('public/cars'),
            ]);
            return to_route('car.index')->with('message', 'Auto inserita
            correttamente!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {       
        return view('cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $imgCarOldPath = $car->img;
        $car->update([
        'brand' => $request->input('brand'),
        'model' => $request->input('model'),
        'year' => $request->input('year'),
        'km' => $request->input('km'),
        'price' => $request->input('price'),
        'img' => ($request->file('img') == null) ? $car->img :
        $request->file('img')->store('public/cars'),
        ]);
        // ! ti ho passato una immagine nuova?
        if($request->file('img') !== null) {
            // ! Se si -> cancello l'immagine vecchia ovvero quella che
            //ha come path $imgMovieOldPath
        Storage::delete($imgCarOldPath);
        }
        return to_route('car.index')->with('message', "Annuncio
        $car->title modificato correttamente!");
        }

        

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Car $car)
    {
        $car->delete(); 
        Storage::delete($car->img); 
        return to_route('car.index')->with('message', "Annuncio
        $car->brand cancellato correttamente!");
        }
        
    }

