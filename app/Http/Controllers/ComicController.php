<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')],
            'description' => 'nullable|string',
            'thumb' => 'nullable|string',
            'price' => 'nullable|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|string',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'nullable|string',
            'price' => 'nullable|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|string',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ]);

        $data = $request->all();

        $comic->update($data);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'nullable|string',
            'price' => 'nullable|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|string',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ]);

        $data = $request->all();

        $comic->update($data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comic::destroy($id);

        return to_route('comics.index');
    }
}
