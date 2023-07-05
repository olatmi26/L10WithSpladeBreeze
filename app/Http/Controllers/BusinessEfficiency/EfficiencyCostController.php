<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\EfficiencyCostStoreRequest;
use App\Http\Requests\BusinessEfficiency\EfficiencyCostUpdateRequest;
use App\Models\BusinessEfficiency\EfficiencyCost;
use App\Models\BusinessEfficiency\EfficiencySetup;
use Illuminate\Http\Request;

class EfficiencyCostController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $efficiencyCosts = EfficiencyCost::all();

        return view('efficiencyCost.index', compact('efficiencyCosts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('efficiencyCost.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyCost $efficiencyCost
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, EfficiencyCost $efficiencyCost)
    {
        return view('efficiencyCost.show', compact('efficiencyCost'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyCost $efficiencyCost
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, EfficiencyCost $efficiencyCost)
    {
        return view('efficiencyCost.edit', compact('efficiencyCost'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencyCostUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\EfficiencyCost $efficiencyCost
     * @return \Illuminate\Http\Response
     */
    public function update(EfficiencyCostUpdateRequest $request, EfficiencyCost $efficiencyCost)
    {
        $efficiencyCost->update($request->validated());

        $request->session()->flash('efficiencyCost.id', $efficiencyCost->id);

        return redirect()->route('efficiencyCost.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyCost $efficiencyCost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, EfficiencyCost $efficiencyCost)
    {
        $efficiencyCost->delete();

        return redirect()->route('efficiencyCost.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencyCostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfficiencyCostStoreRequest $request)
    {
        $setup = Setup::create($request->validated());

        return redirect()->route('setup.index');
    }
}
