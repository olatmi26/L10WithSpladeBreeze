<?php

namespace App\Http\Livewire;

use App\Models\State;
use App\Models\Country;
use Livewire\Component;

class CountryStateSelectLoader extends Component
{
    public $countries, $states;
    public $selectedCountry = NULL;
    public $selectedState = NULL;


    // protected $listeners = ['countryChanged' => 'updatedSelectedCountry'];

    public function mount()
    {
        $this->countries = Country::orderBy('name', 'ASC')->get();
        $this->selectedState = collect();
    }

    public function render()
    {
        return view('livewire.country-state-select-loader');
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::orderBy('name', 'ASC')->where('country_id', $country)->get();
        $this->selectedState = NULL;
    }
}