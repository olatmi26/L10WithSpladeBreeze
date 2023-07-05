<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\SubObjectiveStoreRequest;
use App\Http\Requests\BusinessEfficiency\SubObjectiveUpdateRequest;
use App\Models\BusinessEfficiency\SubObjective;
use Illuminate\Http\Request;

class SubObjectiveController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subObjectives = SubObjective::all();

        return view('subObjectives.index', compact('subObjectives'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('subObjectives.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\SubObjective $subObjective
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, SubObjective $subObjective)
    {
        return view('subObjectives.show', compact('subObjective'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\SubObjective $subObjective
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SubObjective $subObjective)
    {
        return view('subObjectives.edit', compact('subObjective'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\SubObjectiveUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\SubObjective $subObjective
     * @return \Illuminate\Http\Response
     */
    public function update(SubObjectiveUpdateRequest $request, SubObjective $subObjective)
    {
        $subObjective->update($request->validated());

        $request->session()->flash('subObjective.id', $subObjective->id);

        return redirect()->route('subObjective.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\SubObjective $subObjective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SubObjective $subObjective)
    {
        $subObjective->delete();

        return redirect()->route('subObjective.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\SubObjectiveStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubObjectiveStoreRequest $request)
    {
        $subObjective = SubObjective::create($request->validated());

        return redirect()->route('MainObjective.index');
    }
}