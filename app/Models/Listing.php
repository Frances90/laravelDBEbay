<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['customer_id', 'name', 'beschreibung', 'preis'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function image(){
        return $this->hasMany(ListingImage::class);
    }

    public function favorites(){
        return $this->belongsToMany(Customer::class, 'favorites');

    }

}
