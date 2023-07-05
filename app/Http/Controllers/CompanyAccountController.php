<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyAccountStoreRequest;
use App\Http\Requests\CompanyAccountUpdateRequest;
use App\Models\CompanyAccount;
use Illuminate\Http\Request;

class CompanyAccountController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companyAccounts = CompanyAccount::all();

        return view('companyAccount.index', compact('companyAccounts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('companyAccount.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAccount $companyAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CompanyAccount $companyAccount)
    {
        return view('companyAccount.edit', compact('companyAccount'));
    }

    /**
     * @param \App\Http\Requests\CompanyAccountUpdateRequest $request
     * @param \App\Models\CompanyAccount $companyAccount
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyAccountUpdateRequest $request, CompanyAccount $companyAccount)
    {
        $companyAccount->update($request->validated());

        $request->session()->flash('companyAccount.id', $companyAccount->id);

        return redirect()->route('companyAccount.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAccount $companyAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CompanyAccount $companyAccount)
    {
        $companyAccount->delete();

        return redirect()->route('companyAccount.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAccountStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyAccountStoreRequest $request)
    {
        $companyAccount = CompanyAccount::create($request->validated());

        $request->session()->flash('companyAccount.accountName', $companyAccount->accountName);

        return redirect()->route('companyAccount.index');
    }
}
