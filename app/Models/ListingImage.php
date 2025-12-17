<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingImage extends Model
{
    use HasFactory;

    protected $fillable = array('listing_id', 'image_path');

    public function listing(){
        return $this->belongsTo(Listing::class);
    }

    /* 
        use App\Models\ListingImage;

        $image = ListingImage::create([
            'listing_id' => $listing->id,
            'image_path' => 'uploads/mustang123.jpg'
        ]);
    */
}
