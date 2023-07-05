<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillCategoryStoreRequest;
use App\Http\Requests\BillCategoryUpdateRequest;
use App\Models\BillCategory;
use Illuminate\Http\Request;

class BillCategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $billCategories = BillCategory::all();

        return view('billCategory.index', compact('billCategories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('billCategory.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillCategory $billCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BillCategory $billCategory)
    {
        return view('billCategory.edit', compact('billCategory'));
    }

    /**
     * @param \App\Http\Requests\BillCategoryUpdateRequest $request
     * @param \App\Models\BillCategory $billCategory
     * @return \Illuminate\Http\Response
     */
    public function update(BillCategoryUpdateRequest $request, BillCategory $billCategory)
    {
        $billCategory->update($request->validated());

        $request->session()->flash('billCategory.id', $billCategory->id);

        return redirect()->route('billCategory.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BillCategory $billCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BillCategory $billCategory)
    {
        $billCategory->delete();

        return redirect()->route('billCategory.index');
    }

    /**
     * @param \App\Http\Requests\BillCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillCategoryStoreRequest $request)
    {
        $billCategory = BillCategory::create($request->validated());

        $request->session()->flash('BillCategory.category', $BillCategory->category);

        return redirect()->route('billCategory.index');
    }
}
