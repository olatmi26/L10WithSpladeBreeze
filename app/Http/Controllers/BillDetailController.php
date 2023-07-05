<?php

namespace App\Http\Controllers;

use App\BillDetails;
use App\Http\Requests\BillDetailStoreRequest;
use App\Http\Requests\BillDetailUpdateRequest;
use App\Models\BillDetail;
use Illuminate\Http\Request;

class BillDetailController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billDetails = BillDetail::all();

        return view('billDetail.index', compact('billDetails'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('billDetail.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillDetail $billDetail
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BillDetail $billDetail)
    {
        return view('billDetail.show', compact('billDetail'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillDetail $billDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BillDetail $billDetail)
    {
        return view('billDetail.edit', compact('billDetail'));
    }

    /**
     * @param \App\Http\Requests\BillDetailUpdateRequest $request
     * @param \App\Models\BillDetail $billDetail
     * @return \Illuminate\Http\Response
     */
    public function update(BillDetailUpdateRequest $request, BillDetail $billDetail)
    {
        $billDetail->update($request->validated());

        $request->session()->flash('billDetail.id', $billDetail->id);

        return redirect()->route('billDetail.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillDetail $billDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BillDetail $billDetail)
    {
        $billDetail->delete();

        return redirect()->route('billDetail.index');
    }

    /**
     * @param \App\Http\Requests\BillDetailStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillDetailStoreRequest $request)
    {
        $billDetails = BillDetails::create($request->validated());

        $request->session()->flash('billDetails.bill_id, billDetails.Amount', $billDetails->bill_id, billDetails->Amount);

        return redirect()->route('billDetails.index');
    }
}
