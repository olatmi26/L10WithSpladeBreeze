<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyVehicleStoreRequest;
use App\Http\Requests\CompanyVehicleUpdateRequest;
use App\Models\CompanyVehicle;
use Illuminate\Http\Request;

class CompanyVehicleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companyVehicles = CompanyVehicle::all();

        return view('companyVehicle.index', compact('companyVehicles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('companyVehicle.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyVehicle $companyVehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CompanyVehicle $companyVehicle)
    {
        return view('companyVehicle.show', compact('companyVehicle'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyVehicle $companyVehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CompanyVehicle $companyVehicle)
    {
        return view('companyVehicle.edit', compact('companyVehicle'));
    }

    /**
     * @param \App\Http\Requests\CompanyVehicleUpdateRequest $request
     * @param \App\Models\CompanyVehicle $companyVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyVehicleUpdateRequest $request, CompanyVehicle $companyVehicle)
    {
        $companyVehicle->update($request->validated());

        $request->session()->flash('companyVehicle.id', $companyVehicle->id);

        return redirect()->route('companyVehicle.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyVehicle $companyVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CompanyVehicle $companyVehicle)
    {
        $companyVehicle->delete();

        return redirect()->route('companyVehicle.index');
    }

    /**
     * @param \App\Http\Requests\CompanyVehicleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyVehicleStoreRequest $request)
    {
        $companyVehicle = CompanyVehicle::create($request->validated());

        $request->session()->flash('companyVehicle.added_successfully', $companyVehicle->added_successfully);

        return redirect()->route('companyVehicle.index');
    }
}
