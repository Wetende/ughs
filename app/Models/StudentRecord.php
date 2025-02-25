<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_number',
        'admission_date',
        'my_class_id',
        'section_id',
        'user_id',
        'is_graduated'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'admission_date' => 'date',
        'is_graduated' => 'boolean',
    ];

    /**
     * Get validation rules for student records
     */
    public static function getValidationRules()
    {
        return [
            'admission_number' => 'required|string|unique:student_records',
            'admission_date' => 'nullable|date',
            'my_class_id' => 'nullable|exists:my_classes,id',
            'section_id' => 'nullable|exists:sections,id',
        ];
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        //gets only active users
        static::addGlobalScope('notGraduated', function (Builder $builder) {
            $builder->where('is_graduated', 0);
        });
    }

    //accessor for admission_date

    public function getAdmissionDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Get the MyClass that owns the Section.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function myClass(): BelongsTo
    {
        return $this->belongsTo(MyClass::class);
    }

    /**
     * Get the section that owns the StudentRecord.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * Get the user that owns the StudentRecord.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The academicYears that belong to the StudentRecord.
     */
    public function academicYears(): BelongsToMany
    {
        return $this->belongsToMany(AcademicYear::class)->as('studentAcademicYearBasedRecords')->using(AcademicYearStudentRecord::class)->withPivot('my_class_id', 'section_id');
    }

    /**
     * Get current academic year.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function currentAcademicYear()
    {
        return $this->academicYears()->wherePivot('academic_year_id', $this->user->school->academicYear->id);
    }
}
