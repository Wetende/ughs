<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolUpdateRequest;
use App\Models\School;
use App\Services\School\SchoolService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SchoolController extends Controller
{
    /**
     * @var SchoolService
     */
    public $schoolService;

    /**
     * SchoolController constructor.
     */
    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    /**
     * Display school settings.
     */
    public function settings(): View
    {
        $school = School::first();
        return view('pages.school.edit', compact('school'));
    }

    /**
     * Set school for the current user.
     */
    public function setSchool(): RedirectResponse
    {
        $school = School::first();
        auth()->user()->school_id = $school->id;
        auth()->user()->save();

        return redirect()->route('dashboard')->with('success', __('School set successfully'));
    }

    /**
     * Update school settings.
     */
    public function update(SchoolUpdateRequest $request): RedirectResponse
    {
        $school = School::first();
        $this->schoolService->updateSchool($school, $request->validated());

        return back()->with('success', __('School settings updated successfully'));
    }
}
