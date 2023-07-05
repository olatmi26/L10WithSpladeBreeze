<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpirationStoreRequest;
use App\Http\Requests\ExpirationUpdateRequest;
use App\Models\Expiration;
use App\Notification\DocumentExpirationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ExpirationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $expirations = Expiration::all();

        return view('expiration.index', compact('expirations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('expiration.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Expiration $expiration
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Expiration $expiration)
    {
        return view('expiration.show', compact('expiration'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Expiration $expiration
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Expiration $expiration)
    {
        return view('expiration.edit', compact('expiration'));
    }

    /**
     * @param \App\Http\Requests\ExpirationUpdateRequest $request
     * @param \App\Models\Expiration $expiration
     * @return \Illuminate\Http\Response
     */
    public function update(ExpirationUpdateRequest $request, Expiration $expiration)
    {
        $expiration->update($request->validated());

        $request->session()->flash('expiration.id', $expiration->id);

        return redirect()->route('expiration.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Expiration $expiration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Expiration $expiration)
    {
        $expiration->delete();

        return redirect()->route('expiration.index');
    }

    /**
     * @param \App\Http\Requests\ExpirationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpirationStoreRequest $request)
    {
        $expiration = Expiration::create($request->validated());

        Notification::send($expiration->ownBy,enteredBy, new DocumentExpirationNotification($expiration));

        $request->session()->flash('savedSuccessfully', $savedSuccessfully);

        return redirect()->route('Expiration.index');
    }
}
