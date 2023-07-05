<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\Vehicle;
use App\Models\VehicleCategory;
use Livewire\Component;
use App\Models\VehicleType;

class AddVehicleForm extends Component
{
    public $category;
    public $vType;
    public $plateNo;
    public $modelType;
    public $chassesNo;
    public $color;
    public $vehicle_type_selected = '';
    public $vehicle_category_selected = '';
    public $showModal = false;

    // protected $listeners = [
    //     'vehicleTypeAdded' => 'newVehicleTypeAdded',
    //     'vehicleCategoryAdded' => 'newVehicleCategoryAdded',
    // ];

    public function submit()
    {
        $validatedData = $this->validate([
            'plateNo' => 'required',
            'chassesNo' => 'required',
            'color' => 'required',
            'vehicle_type_selected' => 'required',
            'vehicle_category_selected' => 'required',
        ]);


        'plateNo',
        'dueStatus',
        'enteredBy',
        'chassesN0',
        'color',
        'vehicle_type_id',

        $vehicle = new Vehicle;
        $vehicle->plateNo = $this->plateNo;
        $vehicle->model_type = $this->modelType;
        $vehicle->chassesN0 = $this->chassesNo;
        $vehicle->color = $this->color;
        $vehicle->vehicle_type_id = $this->vehicle_type_selected;
        $vehicle->save();
        $this->resetForm();
        session()->flash('message', 'Vehicle added successfully.');
    }

    public function render()
    {
        return view('livewire.vehicles.add-vehicle-form', [
            'categories' => VehicleCategory::orderBy('category', 'asc')->get(),
            'vehicleTypes' => VehicleType::orderBy('type', 'asc')->get()
        ]);
    }

    public function saveNewVType()
    {
        $this->validate(['vType' => 'required|string']);
        $vehicleType = VehicleType::create(['type' => $this->vType]);
        $this->vehicle_type_selected = $vehicleType->id;
        $this->vType = '';
        $this->dispatchBrowserEvent('newVehicleTypeAdded', $vehicleType);
        $this->dispatchBrowserEvent('closeVehicleTypeModal', $vehicleType);
    }

    public function saveNewCategory()
    {
        $this->validate(['category' => 'required|string']);
        $vehicleCat = VehicleCategory::create(['category' => $this->category]);
        $this->vehicle_category_selected = $vehicleCat->id;
        $this->category = '';
        $this->dispatchBrowserEvent('newVehicleCatAdded', $vehicleCat);
        $this->dispatchBrowserEvent('closeVehicleCatModal', $vehicleCat);
    }

    public function openVehicleTypeModal()
    {
        if ($this->vehicle_type_selected == 'add_new_type') {
            $this->dispatchBrowserEvent('openVehicleTypeModal');
        }
    }

    public function openVehicleCategoryModal()
    {
        if ($this->vehicle_category_selected == 'add_new_category') {
            $this->dispatchBrowserEvent('openVehicleCategoryModalForm');
        }
    }

    public function resetForm()
    {
        $this->plateNo = null;
        $this->modelType = null;
        $this->chassesNo = null;
        $this->color = null;
        $this->vehicle_type_selected = null;
    }

    public function newVehicleType()
    {
        $this->dispatchBrowserEvent('vehicleTypeAdded');
    }
}