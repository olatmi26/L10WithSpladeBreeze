<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillPaymentDetailStoreRequest;
use App\Http\Requests\BillPaymentDetailUpdateRequest;
use App\Models\BillPaymentDetail;
use Illuminate\Http\Request;

class BillPaymentDetailController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billPaymentDetails = BillPaymentDetail::all();

        return view('billPaymentDetail.index', compact('billPaymentDetails'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('billPaymentDetail.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillPaymentDetail $billPaymentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BillPaymentDetail $billPaymentDetail)
    {
        return view('billPaymentDetail.edit', compact('billPaymentDetail'));
    }

    /**
     * @param \App\Http\Requests\BillPaymentDetailUpdateRequest $request
     * @param \App\Models\BillPaymentDetail $billPaymentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(BillPaymentDetailUpdateRequest $request, BillPaymentDetail $billPaymentDetail)
    {
        $billPaymentDetail->update($request->validated());

        $request->session()->flash('billPaymentDetail.id', $billPaymentDetail->id);

        return redirect()->route('billPaymentDetail.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillPaymentDetail $billPaymentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BillPaymentDetail $billPaymentDetail)
    {
        $billPaymentDetail->delete();

        return redirect()->route('billPaymentDetail.index');
    }

    /**
     * @param \App\Http\Requests\BillPaymentDetailStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillPaymentDetailStoreRequest $request)
    {
        $billPaymentDetail = BillPaymentDetail::create($request->validated());

        $request->session()->flash('BillPaymentDetail.category', $BillPaymentDetail->category);

        return redirect()->route('billPaymentDetail.index');
    }
}
