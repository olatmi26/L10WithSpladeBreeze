<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\MainObjectiveStoreRequest;
use App\Http\Requests\BusinessEfficiency\MainObjectiveUpdateRequest;
use App\Models\BusinessEfficiency\MainObjective;
use Illuminate\Http\Request;

class MainObjectiveController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mainObjectives = MainObjective::all();

        return view('mainObjective.index', compact('mainObjectives'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('mainObjective.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\MainObjective $mainObjective
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, MainObjective $mainObjective)
    {
        return view('mainObjective.show', compact('mainObjective'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\MainObjective $mainObjective
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, MainObjective $mainObjective)
    {
        return view('mainObjective.edit', compact('mainObjective'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\MainObjectiveUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\MainObjective $mainObjective
     * @return \Illuminate\Http\Response
     */
    public function update(MainObjectiveUpdateRequest $request, MainObjective $mainObjective)
    {
        $mainObjective->update($request->validated());

        $request->session()->flash('mainObjective.id', $mainObjective->id);

        return redirect()->route('mainObjective.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\MainObjective $mainObjective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MainObjective $mainObjective)
    {
        $mainObjective->delete();

        return redirect()->route('mainObjective.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\MainObjectiveStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainObjectiveStoreRequest $request)
    {
        $mainObjective = MainObjective::create($request->validated());

        return redirect()->route('MainObjective.index');
    }
}
