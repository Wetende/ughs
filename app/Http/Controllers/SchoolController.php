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
        $this->middleware(['auth', 'can:manage settings']);
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
     * Update school settings.
     */
    public function update(SchoolUpdateRequest $request): RedirectResponse
    {
        $school = School::first();
        $this->schoolService->updateSchool($school, $request->validated());

        return back()->with('success', __('School settings updated successfully'));
    }
}
