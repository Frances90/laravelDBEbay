<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Listing;
use App\Models\ListingImage;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Listing::query();

        /* Suche */
        // Suche nach Name/Beschreibung
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->where('listings.name', 'LIKE', $searchTerm)
                    ->orWhere('listings.beschreibung', 'LIKE', $searchTerm);
            });
        }

        // Suche nach Ort
        if ($request->filled('search_location')) {
            $query->where('customers.ort', 'LIKE', '%' . $request->search_location . '%');
        }

        // Join mit Customers-Tabelle, um nach Standort zu filtern
        $query->join('customers', 'listings.customer_id', '=', 'customers.id');

        // Filter nach Kategorie
        if ($request->filled('category')) {
            $query->where('category_id', (int) $request->category);
        }

        // Filter nach Standort
        if ($request->filled('location')) {
            $query->where('customers.ort', $request->location);
        }

        // Filter nach Preisbereich
        if ($request->filled('min_price') && is_numeric($request->min_price)) {
            $query->where('preis', '>=', (float) $request->min_price);
        }
        if ($request->filled('max_price') && is_numeric($request->max_price)) {
            $query->where('preis', '<=', (float) $request->max_price);
        }

        // Preisbereich-Filter
        if ($request->filled('price_range')) {
            // Sonderfall: 200€+
            if ($request->price_range === '200_plus') {
                $query->where('preis', '>=', 200);

            } else {
                // Standardfälle
                $prices = explode('-', $request->price_range);

                if (count($prices) === 2 && is_numeric($prices[0]) && is_numeric($prices[1])) {
                    $query->whereBetween('preis', [(float) $prices[0], (float) $prices[1]]);
                }
            }
        }

        $locations = Customer::select('ort')->distinct()->pluck('ort');
        $listings = $query->orderBy('listings.created_at', 'desc')->select('listings.*')->get();
        $categories = Category::all();

        return view('listings.index', compact('listings', 'categories', 'locations'));
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
        $validatedData = $request->validate([
            'name' => 'required',
            'beschreibung' => 'required',
            'preis' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $listing = Listing::create([
            'customer_id' => auth()->id(),
            'name' => $validatedData['name'],
            'beschreibung' => $validatedData['beschreibung'],
            'category_id' => $validatedData['category_id'],
            'preis' => $validatedData['preis'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('listing_images', 'public');
                // Nur den Dateinamen extrahieren
                $filename = basename($path);
                ListingImage::create([
                    'listing_id' => $listing->id,
                    'image_path' => $filename,
                ]);
            }
        }


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
        return view('listings.edit', compact(['listing', 'categories']));
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
