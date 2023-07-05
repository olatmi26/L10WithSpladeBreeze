<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleCategoryStoreRequest;
use App\Http\Requests\VehicleCategoryUpdateRequest;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class VehicleCategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehicleCategories = VehicleCategory::all();

        return view('vehicleCategory.index', compact('vehicleCategories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehicleCategory.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleCategory $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, VehicleCategory $vehicleCategory)
    {
        return view('vehicleCategory.show', compact('vehicleCategory'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleCategory $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, VehicleCategory $vehicleCategory)
    {
        return view('vehicleCategory.edit', compact('vehicleCategory'));
    }

    /**
     * @param \App\Http\Requests\VehicleCategoryUpdateRequest $request
     * @param \App\Models\VehicleCategory $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleCategoryUpdateRequest $request, VehicleCategory $vehicleCategory)
    {
        $vehicleCategory->update($request->validated());

        $request->session()->flash('vehicleCategory.id', $vehicleCategory->id);

        return redirect()->route('vehicleCategory.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleCategory $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, VehicleCategory $vehicleCategory)
    {
        $vehicleCategory->delete();

        return redirect()->route('vehicleCategory.index');
    }

    /**
     * @param \App\Http\Requests\VehicleCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleCategoryStoreRequest $request)
    {
        $vehicleCategory = VehicleCategory::create($request->validated());

        $request->session()->flash('vehicleCategory-created-successively', $vehicleCategory-created-successively);

        return redirect()->route('VehicleCategory.index');
    }
}
