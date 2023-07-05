<?php

namespace App\Http\Controllers;

use App\BillCleared;
use App\Http\Requests\ClearedBillStoreRequest;
use App\Http\Requests\ClearedBillUpdateRequest;
use App\Models\ClearedBill;
use Illuminate\Http\Request;

class ClearedBillController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clearedBills = ClearedBill::all();

        return view('clearedBill.index', compact('clearedBills'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('clearedBill.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ClearedBill $clearedBill
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ClearedBill $clearedBill)
    {
        return view('clearedBill.show', compact('clearedBill'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ClearedBill $clearedBill
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ClearedBill $clearedBill)
    {
        return view('clearedBill.edit', compact('clearedBill'));
    }

    /**
     * @param \App\Http\Requests\ClearedBillUpdateRequest $request
     * @param \App\Models\ClearedBill $clearedBill
     * @return \Illuminate\Http\Response
     */
    public function update(ClearedBillUpdateRequest $request, ClearedBill $clearedBill)
    {
        $clearedBill->update($request->validated());

        $request->session()->flash('clearedBill.id', $clearedBill->id);

        return redirect()->route('clearedBill.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ClearedBill $clearedBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ClearedBill $clearedBill)
    {
        $clearedBill->delete();

        return redirect()->route('clearedBill.index');
    }

    /**
     * @param \App\Http\Requests\ClearedBillStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClearedBillStoreRequest $request)
    {
        $billCleared = BillCleared::create($request->validated());

        $request->session()->flash('billCleared.amount', $billCleared->amount);

        return redirect()->route('clearBill.index');
    }
}
