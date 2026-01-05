<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable;
    protected $fillable = ['name','email','password','plz','ort','strasse','hausnummer','telefonnummer'];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
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
            'name' => 'Frances Mustermann',
            'email' => 'frances@example.com',
            'password' => bcrypt('123456'),
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
