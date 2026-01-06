<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::orderBy("created_at","desc")->paginate(10);
        return view("listings.index", compact("listings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Alle Kategorien aus der DB holen
        $categories = Category::all();

        // View mit Kategorien aufrufen
        return view('listings.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'beschreibung' => 'required', 
            'preis' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Customer ID hinzufügen
        $validatedData['customer_id'] = auth()->id();

        Listing::create($validatedData);

        // Listing::create([
        //     'customer_id' => auth()->id() || $request->customer_id,
        //     'name' => $request->name, 
        //     'beschreibung' => $request->beschreibung, 
        //     'preis' => $request->preis
        // ]);
         // Benutzer zur Übersichtsseite weiterleiten
        return redirect()->route('Startseite')->with('success', 'Artikel erfolgreich erstellt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        $categories = Category::all();
        return view('listings.edit', compact(['listing','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'name' => 'required', 
            'beschreibung' => 'required', 
            'preis' => 'required|numeric'
        ]);

        $listing->update($request->only(['name', 'beschreibung', 'preis']));
        return redirect('/listings/' . $listing->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
