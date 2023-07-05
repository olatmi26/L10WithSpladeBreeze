<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StateSelectLoader extends Component
{
    public $countries, $states = [];
    public $state = '';


    protected $listeners = ['loadAllStates' => 'loadAllStates'];

    public function render()
    {
        return view('livewire.state-select-loader');
    }

    public function loadAllStates($country)
    {
        return dd($country);
    }
}