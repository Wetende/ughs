<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'attachment',
        'start_date',
        'stop_date',
        'active',
        'school_id',
        'category',
        'is_featured',
        'approval_status',
        'approved_by',
        'approved_at',
        'is_important',
        'event_date',
        'rejection_reason',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_important' => 'boolean',
        'active' => 'boolean',
        'approved_at' => 'datetime',
        'event_date' => 'datetime',
    ];

    public function scopeActive($query)
    {
        $query->where('start_date', '<=', date('Y-m-d'))
        ->where('stop_date', '>=', date('Y-m-d'))
        ->where('active', 1);
    }

    public function scopePending($query)
    {
        return $query->where('approval_status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('approval_status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('approval_status', 'rejected');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeImportant($query)
    {
        return $query->where('is_important', true);
    }

    public function scopeByCategory($query, $category)
    {
        if ($category && $category !== 'all') {
            return $query->where('category', $category);
        }
        return $query;
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    //used in view for displaying time on datatable
    public function getStartDateForHumansAttribute()
    {
        return \Carbon\Carbon::parse($this->start_date)->diffForHumans();
    }

    //used in view for displaying time on datatable
    public function getStopDateForHumansAttribute()
    {
        return \Carbon\Carbon::parse($this->stop_date)->diffForHumans();
    }
}
