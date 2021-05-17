<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {

        $pizzas = Pizza::all();

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function create() {
        $pizza = Pizza::updateOrCreate([
            'base' => 'Thin & Crusty',
            'type' => 'Hawaiian',
            'name' => 'Tiger',
        ]);
        $pizza->save();
        $pizza2 = Pizza::updateOrCreate([
            'base' => 'Cheezy Crust',
            'type' => 'Volcano',
            'name' => 'Juice',
        ]);
        $pizza2->save();
    }
}
