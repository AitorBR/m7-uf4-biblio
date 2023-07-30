<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function home() {
        // Utilitzant la ruta
        // return redirect('catalog');
        // utilitzant el nom de la ruta
        return redirect()->route('catalog.index');
    }
}
