<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Echi()
    {
        $Echi= ['HighSchool DxD', 'Boku no Pico', 'Shinmai maou no Testament'];
        return view('Echi', compact('Echi'));
    }

    public function slice_of_life()
    {
        $Slice = ['Angel Beats', 'Toradora!', 'Fruit Basket'];
        return view('Slice', compact('Slice'));
    }

    public function comedy()
    {
        $Comedy = ['Gintama', 'Grand Blue', 'Mashle'];
        return view('comedy', compact('comedy'));
    }
}
