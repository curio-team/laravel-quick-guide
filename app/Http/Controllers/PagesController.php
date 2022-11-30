<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class PagesController extends Controller
{
    public function viewHomePage()
    {
        return view('home');
    }

    public function getAllCars(){
        $allCars = Car::all();
        $allAudis = Car::where('brand', 'Audi')->get();
        return view('cars', [
            'cars' => $allCars, 
            'audis' => $allAudis,
        ]);
    }

    public function addCar() {
        return view('add-car');
    }

    public function processNewCar(Request $request) {
        $newCar = new Car();
        $newCar->brand = $request->brand;
        $newCar->amount_of_tires = $request->tires;
        $newCar->description = $request->description;
        $newCar->release_date = $request->release_date;

        $newCar->save();

        return redirect()->route('cars');
    }

    public function editCar($id) {
        $car = Car::findOrFail($id);
        return view('edit-car', [
            'car' => $car
        ]);
    }

    public function processEditCar(Request $request, $id) {
        $car = Car::findOrFail($id);
        $car->brand = $request->brand;
        $car->amount_of_tires = $request->tires;
        $car->description = $request->description;
        $car->release_date = $request->release_date;

        $car->save();

        return redirect()->route('cars');
    }

    public function deleteCar($id) {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars');
    }
}
