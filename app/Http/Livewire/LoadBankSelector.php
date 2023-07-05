<?php

namespace App\Http\Livewire;

use App\Models\Bank;
use Livewire\Component;
use Illuminate\Http\Request;

class LoadBankSelector extends Component
{
    public $banks;
    public $bank;
    public $selectedBank;



    protected $listeners = ['bankAdded' => 'aNewbankAdded'];


    public function render()
    {
        $this->banks = Bank::orderBy('name', 'ASC')->get();
        return view('livewire.load-bank-selector');
    }

    public function updatedSelectedBank($bank)
    {
        if ($bank == 'new') {
            $this->dispatchBrowserEvent('showAddNewBankModal', $bank);
        }
    }

    public function aNewbankAdded($bank)
    {
        $this->selectedBank = $bank;
    }
}