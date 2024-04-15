<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $this->validation($request->all());

        // dd($request);

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request->all());

        // dd($request);

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    // creiamo una funzione privata per i controlli di validazione ed i controlli dei messaggi di errore
    private function validation($data){

        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'description' =>'required|max:5000',
            'thumb' => 'nullable',
            'price' => 'max:255|nullable',
            'series' => 'max:255|nullable',
            'sale_date' => 'required|date|nullable',
            'type' => 'required|max:255|nullable',
            'artists' => 'max:2000|nullable',
            'writers' => 'required|max:3000|nullable',
        ], [
            // 
            'required' => 'Il campo :attribute deve essere inserito',
            'sale_date.date' => 'La data di vendita deve essere valida.',
            'max' => 'Il campo :attribute deve essere :max caratteri',
        ])->validate();
    }
}
