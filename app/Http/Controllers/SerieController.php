<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SerieController extends Controller
{
    public function index() 
    {
       $series = Serie::query()->orderBy('nome')->get();
       
       return view('series.index')->with('series', $series);
    }

    public function create() 
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
       $serie = $request->all();
       Serie::create($serie);

       return redirect('/series');
    }
}
