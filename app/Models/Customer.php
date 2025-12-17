<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = ['name','email','password','plz','ort','strasse','hausnummer','telefonnummer'];
    public function listings(){
        return $this->hasMany(Listing::class);
    }

    public function favorites(){
        return $this->belongsToMany(Listing::class, 'favorites');
    }

    private function xxx(){
        exit;

        // use App\Models\Customer;
        /* $customer = Customer::create(Array(
            'name' => 'Emilie Mustermann',
            'email' => 'emilie@example.com',
            'password' => bcrypt('geheim'),
            'plz' => '54321',
            'ort' => 'Berlin',
            'strasse' => 'Musterstraße',
            'hausnummer' => '20',
            'telefonnummer' => '0123456789'
        )); 
        
        $customer = Customer::find(1);
        
        */
    }
}
