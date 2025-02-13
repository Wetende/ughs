<?php

namespace App\Services\Term;

use App\Exceptions\InvalidValueException;
use App\Models\Term;

class TermService
{
    /**
     * Get all terms in school.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllTerms()
    {
        return Term::where(['school_id' => auth()->user()->school_id])->get();
    }

    /**
     * Get all terms in academic year.
     *
     * @param int $academicYear
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllTermsInAcademicYear(int $academicYear)
    {
        return $this->getAllTerms()->where('academic_year_id', $academicYear);
    }

    /**
     * Get term by Id.
     *
     * @param int $id
     * @return Term
     */
    public function getTermById(int $id)
    {
        return Term::find($id);
    }

    /**
     * Create a new term.
     *
     * @param mixed $data
     * @return Term
     */
    public function createTerm($data)
    {
        $data['academic_year_id'] = auth()->user()->school->academicYear->id;
        $data['school_id'] = auth()->user()->school_id;

        return Term::create($data);
    }

    /**
     * Update a term.
     *
     * @param Term $term
     * @param mixed $data
     * @return Term
     */
    public function updateTerm(Term $term, $data)
    {
        $term->update($data);

        return $term;
    }

    /**
     * Delete a term.
     *
     * @param Term $term
     * @return bool|null
     */
    public function deleteTerm(Term $term)
    {
        return $term->delete();
    }

    /**
     * Set current term.
     *
     * @param Term $term
     * @return void
     * @throws InvalidValueException
     */
    public function setTerm(Term $term)
    {
        if ($term->academic_year_id != auth()->user()->school->academic_year_id) {
            throw new InvalidValueException('Term must be in current academic year');
        }

        auth()->user()->school()->update([
            'term_id' => $term->id,
        ]);
    }
}
