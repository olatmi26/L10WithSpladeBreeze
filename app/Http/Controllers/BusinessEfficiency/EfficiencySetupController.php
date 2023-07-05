<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\EfficiencySetupStoreRequest;
use App\Http\Requests\BusinessEfficiency\EfficiencySetupUpdateRequest;
use App\Models\BusinessEfficiency\EfficiencySetup;
use Illuminate\Http\Request;

class EfficiencySetupController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $efficiencySetups = EfficiencySetup::all();

        return view('efficiencySetup.index', compact('efficiencySetups'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('efficiencySetup.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencySetup $efficiencySetup
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, EfficiencySetup $efficiencySetup)
    {
        return view('efficiencySetup.show', compact('efficiencySetup'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencySetup $efficiencySetup
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, EfficiencySetup $efficiencySetup)
    {
        return view('efficiencySetup.edit', compact('efficiencySetup'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencySetupUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\EfficiencySetup $efficiencySetup
     * @return \Illuminate\Http\Response
     */
    public function update(EfficiencySetupUpdateRequest $request, EfficiencySetup $efficiencySetup)
    {
        $efficiencySetup->update($request->validated());

        $request->session()->flash('successful', $efficiencySetup->id);

        return redirect()->route('efficiencySetup.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencySetup $efficiencySetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, EfficiencySetup $efficiencySetup)
    {
        $efficiencySetup->delete();

        return redirect()->route('efficiencySetup.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencySetupStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfficiencySetupStoreRequest $request)
    {
        $setup = Setup::create($request->validated());

        return redirect()->route('EfficiencySetup.index');
    }
}