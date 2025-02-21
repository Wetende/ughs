<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'timetables';

    protected $fillable = [
        'name',
        'description',
        'term_id',
        'my_class_id',
    ];

    public function term(): BelongsTo
    {
        return $this->belongsTo(Term::class);
    }

    public function myClass(): BelongsTo
    {
        return $this->belongsTo(MyClass::class);
    }

    public function timeSlots(): HasMany
    {
        return $this->hasMany(TimetableTimeSlot::class, 'timetable_id');
    }
}
