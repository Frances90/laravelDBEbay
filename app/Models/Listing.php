<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['customer_id', 'name', 'beschreibung', 'preis','category_id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function images(){
        return $this->hasMany(ListingImage::class);
    }

    public function favorites(){
        return $this->belongsToMany(Customer::class, 'favorites');

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /* 
        use App\Models\Listing;

        $listing = Listing::create([
            'customer_id' => 1,
            'name' => 'Ford Mustang',
            'beschreibung' => 'Kaufen Sie ein geiles Auto, was kaum gefahren wurde.',
            'preis' => 10000.00
        ]);

        $listing = Listing::find(1);
        $listing->images;
    */

}
