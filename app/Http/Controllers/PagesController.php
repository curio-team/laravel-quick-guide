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

    public function processNewCar() {
        $newCar = new Car();
        $newCar->brand = 'Audi';
        $newCar->amount_of_tires = 4;
        $newCar->description = 'Audi is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles.';
        $newCar->release_date = date('2019-01-01');

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
        $car->brand = 'BMW';
        $car->amount_of_tires = 4;
        $car->description = 'BMW is a German multinational company which produces automobiles and motorcycles.';
        $car->release_date = date('2019-01-01');

        $car->save();

        return redirect()->route('cars');
    }

    public function deleteCar($id) {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars');
    }
}
