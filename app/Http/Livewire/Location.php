<?php

namespace App\Http\Livewire;

use App\Models\Location as Locations;
use App\Models\province;
use Livewire\Component;

class Location extends Component
{
    public $countries = [], $cities = [];
    public $country, $city;

    public function mount()
    {
        $this->countries = province::all();
        $this->cities = collect();
    }

    
    public function render()
    {   
        return view('livewire.location');
    }

    public function updatedCountry($value)
    {
        $this->cities = Locations::where('province_id', $value)->get();
        $this->city = $this->cities->first()->id ?? null;
    }
}