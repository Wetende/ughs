<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Term extends Model
{
    use HasFactory;

    protected $table = 'terms';

    protected $fillable = ['name', 'school_id', 'academic_year_id', 'check_result'];
    
    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function ($term) {
            if (empty($term->academic_year_id)) {
                throw new \InvalidArgumentException('Academic year ID cannot be null when creating a term');
            }
            
            if (empty($term->school_id)) {
                throw new \InvalidArgumentException('School ID cannot be null when creating a term');
            }
        });
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Get all of the exams for the Term.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany(Exam::class, 'term_id');
    }

    /**
     * Get all of the examSlots for the Term.
     */
    public function examSlots(): HasManyThrough
    {
        return $this->hasManyThrough(ExamSlot::class, Exam::class, 'term_id');
    }
}
