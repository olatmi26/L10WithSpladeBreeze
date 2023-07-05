<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\PerformanceRegulationStoreRequest;
use App\Http\Requests\BusinessEfficiency\PerformanceRegulationUpdateRequest;
use App\Jobs\PerformanceRegulationJob;
use App\Mail\ReviewPerformanceRegulation;
use App\Models\BusinessEfficiency\PerformanceRegulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PerformanceRegulationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $performanceRegulations = PerformanceRegulation::all();

        return view('performanceRegulation.index', compact('performanceRegulations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('performanceRegulation.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceRegulation $performanceRegulation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PerformanceRegulation $performanceRegulation)
    {
        return view('performanceRegulation.show', compact('performanceRegulation'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceRegulation $performanceRegulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PerformanceRegulation $performanceRegulation)
    {
        return view('performanceRegulation.edit', compact('performanceRegulation'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\PerformanceRegulationUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\PerformanceRegulation $performanceRegulation
     * @return \Illuminate\Http\Response
     */
    public function update(PerformanceRegulationUpdateRequest $request, PerformanceRegulation $performanceRegulation)
    {
        $performanceRegulation->update($request->validated());

        $request->session()->flash('performanceRegulation.id', $performanceRegulation->id);

        return redirect()->route('performanceRegulation.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceRegulation $performanceRegulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PerformanceRegulation $performanceRegulation)
    {
        $performanceRegulation->delete();

        return redirect()->route('performanceRegulation.index');
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\PerformanceRegulationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerformanceRegulationStoreRequest $request)
    {
        $performanceRegulation = PerformanceRegulation::create($request->validated());

        Mail::to($performanceRegulation->performance_evaluation->userToEvaluate)->send(new ReviewPerformanceRegulation($performanceRegulation));

        PerformanceRegulationJob::dispatch($performanceRegulation);

        return redirect()->route('PerformanceRegulation.index');
    }
}
