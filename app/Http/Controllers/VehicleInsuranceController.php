<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleInsuranceStoreRequest;
use App\Http\Requests\VehicleInsuranceUpdateRequest;
use App\InsuranceDocs;
use App\Models\VehicleInsurance;
use Illuminate\Http\Request;

class VehicleInsuranceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehicleInsurances = VehicleInsurance::all();

        return view('vehicleInsurance.index', compact('vehicleInsurances'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehicleInsurance.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleInsurance $vehicleInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, VehicleInsurance $vehicleInsurance)
    {
        return view('vehicleInsurance.show', compact('vehicleInsurance'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleInsurance $vehicleInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, VehicleInsurance $vehicleInsurance)
    {
        return view('vehicleInsurance.edit', compact('vehicleInsurance'));
    }

    /**
     * @param \App\Http\Requests\VehicleInsuranceUpdateRequest $request
     * @param \App\Models\VehicleInsurance $vehicleInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleInsuranceUpdateRequest $request, VehicleInsurance $vehicleInsurance)
    {
        $vehicleInsurance->update($request->validated());

        $request->session()->flash('vehicleInsurance.id', $vehicleInsurance->id);

        return redirect()->route('vehicleInsurance.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleInsurance $vehicleInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, VehicleInsurance $vehicleInsurance)
    {
        $vehicleInsurance->delete();

        return redirect()->route('vehicleInsurance.index');
    }

    /**
     * @param \App\Http\Requests\VehicleInsuranceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleInsuranceStoreRequest $request)
    {
        $insuranceDocs = InsuranceDocs::create($request->validated());

        $request->session()->flash('insuranceCertificateDocument-created-successively', $insuranceCertificateDocument-created-successively);

        return redirect()->route('VehicleInsurance.index');
    }
}
