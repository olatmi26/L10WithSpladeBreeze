<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\EfficiencyPaymentStoreRequest;
use App\Http\Requests\BusinessEfficiency\EfficiencyPaymentUpdateRequest;
use App\Models\BusinessEfficiency\EfficiencyPayment;
use Illuminate\Http\Request;

class EfficiencyPaymentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $efficiencyPayments = EfficiencyPayment::all();

        return view('efficiencyPayment.index', compact('efficiencyPayments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('efficiencyPayment.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyPayment $efficiencyPayment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, EfficiencyPayment $efficiencyPayment)
    {
        return view('efficiencyPayment.show', compact('efficiencyPayment'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyPayment $efficiencyPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, EfficiencyPayment $efficiencyPayment)
    {
        return view('efficiencyPayment.edit', compact('efficiencyPayment'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencyPaymentUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\EfficiencyPayment $efficiencyPayment
     * @return \Illuminate\Http\Response
     */
    public function update(EfficiencyPaymentUpdateRequest $request, EfficiencyPayment $efficiencyPayment)
    {
        $efficiencyPayment->update($request->validated());

        $request->session()->flash('efficiencyPayment.id', $efficiencyPayment->id);

        return redirect()->route('efficiencyPayment.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\EfficiencyPayment $efficiencyPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, EfficiencyPayment $efficiencyPayment)
    {
        $efficiencyPayment->delete();

        return redirect()->route('efficiencyPayment.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\EfficiencyPaymentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfficiencyPaymentStoreRequest $request)
    {
        $payment = Payment::create($request->validated());

        return redirect()->route('EfficiencyPayment.index');
    }
}
