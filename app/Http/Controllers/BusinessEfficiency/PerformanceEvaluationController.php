<?php

namespace App\Http\Controllers\BusinessEfficiency;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessEfficiency\PerformanceEvaluationStoreRequest;
use App\Http\Requests\BusinessEfficiency\PerformanceEvaluationUpdateRequest;
use App\Http\Resources\BusinessEfficiency\PerformanceEvaluationResource;
use App\Mail\ReviewPerformanceEvaluation;
use App\Models\BusinessEfficiency\PerformanceEvaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PerformanceEvaluationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $performanceEvaluations = PerformanceEvaluation::all();

        return view('performanceEvaluation.index', compact('performanceEvaluations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('performanceEvaluation.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceEvaluation $performanceEvaluation
     * @return \App\Http\Resources\BusinessEfficiency\PerformanceEvaluationResource
     */
    public function show(Request $request, PerformanceEvaluation $performanceEvaluation)
    {
        return new PerformanceEvaluationResource($performanceEvaluation);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceEvaluation $performanceEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PerformanceEvaluation $performanceEvaluation)
    {
        return view('performanceEvaluation.edit', compact('performanceEvaluation'));
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\PerformanceEvaluationUpdateRequest $request
     * @param \App\Models\BusinessEfficiency\PerformanceEvaluation $performanceEvaluation
     * @return \App\Http\Resources\BusinessEfficiency\PerformanceEvaluationResource
     */
    public function update(PerformanceEvaluationUpdateRequest $request, PerformanceEvaluation $performanceEvaluation)
    {
        $performanceEvaluation->update($request->validated());

        return new PerformanceEvaluationResource($performanceEvaluation);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BusinessEfficiency\PerformanceEvaluation $performanceEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PerformanceEvaluation $performanceEvaluation)
    {
        $performanceEvaluation->delete();

        return response()->noContent();
    }

    /**
     * @param \App\Http\Requests\BusinessEfficiency\PerformanceEvaluationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerformanceEvaluationStoreRequest $request)
    {
        $evaluation = Evaluation::create($request->validated());

        Mail::to($evaluation->userToEvaluate)->send(new ReviewPerformanceEvaluation($evaluation));

        return redirect()->route('PerformanceEvaluation.index');
    }
}
