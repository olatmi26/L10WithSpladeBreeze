<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankStoreRequest;
use App\Http\Requests\BankUpdateRequest;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banks = Bank::all('name');
        return view('bank.index', compact('banks'));
    }

    public function bankDetails()
    {
        $banks = Bank::all('name');
        return view('bank.index', compact('banks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Bank $bank)
    {
        return view('bank.edit', compact('bank'));
    }

    /**
     * @param \App\Http\Requests\BankUpdateRequest $request
     * @param \App\Models\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function update(BankUpdateRequest $request, Bank $bank)
    {
        $bank->update($request->validated());

        $request->session()->flash('bank.id', $bank->id);

        return redirect()->route('bank.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Bank $bank)
    {
        $bank->delete();

        return redirect()->route('bank.index');
    }

    /**
     * @param \App\Http\Requests\BankStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankStoreRequest $request)
    {
        $bank = Bank::create($request->validated());

        $request->session()->flash('bank.name', $bank->name);

        return redirect()->route('bank.index');
    }
}