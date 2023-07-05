<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendorAccountStoreRequest;
use App\Http\Requests\VendorAccountUpdateRequest;
use App\Models\VendorAccount;
use Illuminate\Http\Request;

class VendorAccountController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vendorAccounts = VendorAccount::all();

        return view('vendorAccount.index', compact('vendorAccounts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vendorAccount.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VendorAccount $vendorAccount
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, VendorAccount $vendorAccount)
    {
        return view('vendorAccount.show', compact('vendorAccount'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VendorAccount $vendorAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, VendorAccount $vendorAccount)
    {
        return view('vendorAccount.edit', compact('vendorAccount'));
    }

    /**
     * @param \App\Http\Requests\VendorAccountUpdateRequest $request
     * @param \App\Models\VendorAccount $vendorAccount
     * @return \Illuminate\Http\Response
     */
    public function update(VendorAccountUpdateRequest $request, VendorAccount $vendorAccount)
    {
        $vendorAccount->update($request->validated());

        $request->session()->flash('vendorAccount.id', $vendorAccount->id);

        return redirect()->route('vendorAccount.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VendorAccount $vendorAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, VendorAccount $vendorAccount)
    {
        $vendorAccount->delete();

        return redirect()->route('vendorAccount.index');
    }

    /**
     * @param \App\Http\Requests\VendorAccountStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorAccountStoreRequest $request)
    {
        $vendorAccount = VendorAccount::create($request->validated());

        $request->session()->flash('vendorAccount.accountName', $vendorAccount->accountName);

        return redirect()->route('vendorAccount.index');
    }
}
