<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAccountStoreRequest;
use App\Http\Requests\UserAccountUpdateRequest;
use App\Models\UserAccount;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userAccounts = UserAccount::all();

        return view('userAccount.index', compact('userAccounts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('userAccount.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserAccount $userAccount
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, UserAccount $userAccount)
    {
        return view('userAccount.show', compact('userAccount'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserAccount $userAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, UserAccount $userAccount)
    {
        return view('userAccount.edit', compact('userAccount'));
    }

    /**
     * @param \App\Http\Requests\UserAccountUpdateRequest $request
     * @param \App\Models\UserAccount $userAccount
     * @return \Illuminate\Http\Response
     */
    public function update(UserAccountUpdateRequest $request, UserAccount $userAccount)
    {
        $userAccount->update($request->validated());

        $request->session()->flash('userAccount.id', $userAccount->id);

        return redirect()->route('userAccount.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UserAccount $userAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, UserAccount $userAccount)
    {
        $userAccount->delete();

        return redirect()->route('userAccount.index');
    }

    /**
     * @param \App\Http\Requests\UserAccountStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAccountStoreRequest $request)
    {
        $userAccount = UserAccount::create($request->validated());

        $request->session()->flash('userAccount.accountName', $userAccount->accountName);

        return redirect()->route('userAccount.index');
    }
}
