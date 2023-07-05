<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillStoreRequest;
use App\Http\Requests\BillUpdateRequest;
use App\Models\Bill;
use App\Models\Vendor;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bills = Bill::all();
        return view('bill.index', compact('bills'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $receivers = Vendor::latest()->orderBy('name', 'asc')->get();
        // $countrie
        return view('bill.create', compact('receivers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Bill $bill)
    {
        return view('bill.show', compact('bill'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Bill $bill)
    {
        return view('bill.edit', compact('bill'));
    }

    /**
     * @param \App\Http\Requests\BillUpdateRequest $request
     * @param \App\Models\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function update(BillUpdateRequest $request, Bill $bill)
    {
        $bill->update($request->validated());

        $request->session()->flash('bill.id', $bill->id);

        return redirect()->route('bill.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bill $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Bill $bill)
    {
        $bill->delete();

        return redirect()->route('bill.index');
    }

    /**
     * @param \App\Http\Requests\BillStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillStoreRequest $request)
    {
        $bill = Bill::create($request->validated());

        $request->session()->flash('bill.added_successfully', $bill->added_successfully);

        return redirect()->route('bill.index');
    }
}