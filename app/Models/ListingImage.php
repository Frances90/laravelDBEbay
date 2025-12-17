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
}
