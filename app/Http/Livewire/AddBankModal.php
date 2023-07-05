<?php

namespace App\Http\Livewire;

use Keygen\Keygen;
use App\Models\Bank;
use Livewire\Component;

class AddBankModal extends Component
{
    public $name;




    public function render()
    {
        return view('livewire.add-bank-modal');
    }

    protected $rules = [
        'name' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $newbank = Bank::create([
            'name' => $this->name,
            'code' =>  Keygen::numeric(4)->generate(),
        ]);
        $this->emit('bankAdded', $newbank->id);
    }
}