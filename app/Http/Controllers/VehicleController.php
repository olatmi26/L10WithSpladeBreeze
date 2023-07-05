<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleStoreRequest;
use App\Http\Requests\VehicleUpdateRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehicles = Vehicle::all();

        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehicle.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Vehicle $vehicle)
    {
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * @param \App\Http\Requests\VehicleUpdateRequest $request
     * @param \App\Models\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleUpdateRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validated());

        $request->session()->flash('vehicle.id', $vehicle->id);

        return redirect()->route('vehicle.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicle.index');
    }

    /**
     * @param \App\Http\Requests\VehicleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleStoreRequest $request)
    {
        $vehicle = Vehicle::create($request->validated());

        $request->session()->flash('vehicle.added_successfully', $vehicle->added_successfully);

        return redirect()->route('Vehicle.index');
    }
}
