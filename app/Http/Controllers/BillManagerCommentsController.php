<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillManagerCommentsStoreRequest;
use App\Http\Requests\BillManagerCommentsUpdateRequest;
use App\Models\BillManagerComments;
use Illuminate\Http\Request;

class BillManagerCommentsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billManagerComments = BillManagerComment::all();

        return view('billManagerComment.index', compact('billManagerComments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('billManagerComment.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillManagerComments $billManagerComment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BillManagerComment $billManagerComment)
    {
        return view('billManagerComment.edit', compact('billManagerComment'));
    }

    /**
     * @param \App\Http\Requests\BillManagerCommentsUpdateRequest $request
     * @param \App\Models\BillManagerComments $billManagerComment
     * @return \Illuminate\Http\Response
     */
    public function update(BillManagerCommentsUpdateRequest $request, BillManagerComment $billManagerComment)
    {
        $billManagerComment->update($request->validated());

        $request->session()->flash('billManagerComment.id', $billManagerComment->id);

        return redirect()->route('billManagerComment.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillManagerComments $billManagerComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BillManagerComment $billManagerComment)
    {
        $billManagerComment->delete();

        return redirect()->route('billManagerComment.index');
    }

    /**
     * @param \App\Http\Requests\BillManagerCommentsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillManagerCommentsStoreRequest $request)
    {
        $billManagerComment = BillManagerComment::create($request->validated());

        $request->session()->flash('billManagerComment.commentMsg', $billManagerComment->commentMsg);

        return redirect()->route('billManagerComments.index');
    }
}
