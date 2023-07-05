<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillTypeStoreRequest;
use App\Http\Requests\BillTypeUpdateRequest;
use App\Models\BillType;
use Illuminate\Http\Request;

class BillTypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billTypes = BillType::all();

        return view('billType.index', compact('billTypes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('billType.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillType $billType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BillType $billType)
    {
        return view('billType.show', compact('billType'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillType $billType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BillType $billType)
    {
        return view('billType.edit', compact('billType'));
    }

    /**
     * @param \App\Http\Requests\BillTypeUpdateRequest $request
     * @param \App\Models\BillType $billType
     * @return \Illuminate\Http\Response
     */
    public function update(BillTypeUpdateRequest $request, BillType $billType)
    {
        $billType->update($request->validated());

        $request->session()->flash('billType.id', $billType->id);

        return redirect()->route('billType.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillType $billType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BillType $billType)
    {
        $billType->delete();

        return redirect()->route('billType.index');
    }

    /**
     * @param \App\Http\Requests\BillTypeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillTypeStoreRequest $request)
    {
        $billType = BillType::create($request->validated());

        $request->session()->flash('billType.title', $billType->title);

        return redirect()->route('billtype.index');
    }
}
