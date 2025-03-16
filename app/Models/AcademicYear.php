<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class AcademicYear extends Model
{
    use HasFactory;

    protected $appends = ['name'];

    protected $fillable = [
        'start_year',
        'stop_year',
        'school_id',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn () => "$this->start_year - $this->stop_year",
        );
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    /**
     * @deprecated Use terms() instead
     */
    public function semesters(): HasMany
    {
        return $this->hasMany(Semester::class);
    }
    
    /**
     * Get all terms for the academic year.
     */
    public function terms(): HasMany
    {
        return $this->hasMany(Term::class);
    }

    /**
     * Get all of the exams for the AcademicYear.
     */
    public function exams(): HasManyThrough
    {
        return $this->hasManyThrough(Exam::class, Term::class, 'academic_year_id', 'term_id', 'id', 'id');
    }

    /**
     * The studentRecords that belong to the AcademicYear.
     */
    public function studentRecords(): BelongsToMany
    {
        return $this->belongsToMany(StudentRecord::class)->as('studentAcademicYearBasedRecords')->using(AcademicYearStudentRecord::class)->withPivot('my_class_id', 'section_id');
    }
}
