<?php

namespace App\Http\Controllers;

use App\Http\Requests\TermStoreRequest;
use App\Http\Requests\SetTermRequest;
use App\Models\Term;
use App\Services\Term\TermService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TermController extends Controller
{
    public $term;

    public function __construct(TermService $term)
    {
        $this->term = $term;
        $this->authorizeResource(Term::class, 'term');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.term.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.term.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TermStoreRequest $request): RedirectResponse
    {
        $data = $request->except(['_token']);
        $this->term->createTerm($data);

        return back()->with('success', 'Successfully created term');
    }

    /**
     * Display the specified resource.
     */
    public function show(Term $term): View
    {
        return view('pages.term.show', compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Term $term): View
    {
        return view('pages.term.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TermStoreRequest $request, Term $term): RedirectResponse
    {
        $data = $request->except(['_token']);
        $this->term->updateTerm($term, $data);

        return back()->with('success', 'Successfully updated term');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Term $term): RedirectResponse
    {
        $this->term->deleteTerm($term);

        return back()->with('success', 'Successfully deleted term');
    }

    /**
     * Set the current term
     */
    public function setTerm(SetTermRequest $request): RedirectResponse
    {
        $this->authorize('setTerm', Term::class);
        $term = Term::findOrFail($request->term_id);
        $this->term->setTerm($term);

        return back()->with('success', 'Successfully set current term');
    }
}
