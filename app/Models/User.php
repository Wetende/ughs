<?php

namespace App\Models;

use App\Traits\InSchool;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use SoftDeletes;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use InSchool;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'birthday',
        'address',
        'blood_group',
        'denomination',
        'county_id',
        'city',
        'phone',
        'gender',
        'school_id',
        'id_number',
        'passport_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected static function booted()
    {
        static::addGlobalScope('orderByName', function (Builder $builder) {
            $builder->orderBy('name');
        });
    }

    public function scopeStudents($query)
    {
        return $query->role('student');
    }

    /**
     * Active applicants.
     *
     * @param Builder $query
     *
     * @return void
     */
    public function scopeApplicants($query)
    {
        return $query->whereHas('accountApplication', function (Builder $query) {
            $query->otherCurrentStatus('rejected');
        })->role('applicant');
    }

    /**
     * Active applicants.
     *
     * @param Builder $query
     *
     * @return void
     */
    public function scopeRejectedApplicants($query)
    {
        return $query->role('applicant')->whereHas('accountApplication', function (Builder $query) {
            $query->currentStatus('rejected');
        });
    }

    public function scopeActiveStudents($query)
    {
        return $query->whereRelation('studentRecord', 'is_graduated', 0);
    }

    /**
     * Get the school that owns the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class)->withDefault(function ($school) {
            $defaultSchool = School::first();
            if ($defaultSchool) {
                return $defaultSchool;
            }
        });
    }

    /**
     * Get the studentRecord associated with the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function studentRecord()
    {
        return $this->hasOne(StudentRecord::class);
    }

    /**
     * Get the studentRecord of graduation associated with the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function graduatedStudentRecord()
    {
        return $this->hasOne(StudentRecord::class)->withoutGlobalScopes()->where('is_Graduated', true);
    }

    /**
     * Get the studentRecord of graduation associated with the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function allStudentRecords()
    {
        return $this->hasOne(StudentRecord::class)->withoutGlobalScopes();
    }

    /**
     * The parents that belong to the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parents()
    {
        return $this->belongsToMany(ParentRecord::class);
    }

    /**
     * Get the teacherRecord associated with the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacherRecord()
    {
        return $this->hasOne(TeacherRecord::class);
    }

    /**
     * Get the parent records associated with the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parentRecord()
    {
        return $this->hasOne(ParentRecord::class);
    }

    /**
     * Get the AccountApplication associated with the User.
     */
    public function accountApplication(): HasOne
    {
        return $this->hasOne(AccountApplication::class);
    }

    /**
     * Get all of the feeInvoices for the User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feeInvoices(): HasMany
    {
        return $this->hasMany(FeeInvoice::class);
    }

    //get first name
    public function firstName()
    {
        return explode(' ', $this->name)[0];
    }

    //get first name
    public function getFirstNameAttribute()
    {
        return $this->firstName();
    }

    //get last name
    public function lastName()
    {
        $nameParts = explode(' ', $this->name);
        return count($nameParts) > 1 ? $nameParts[1] : '';
    }

    //get last name
    public function getLastNameAttribute()
    {
        return $this->lastName();
    }

    //get other names
    public function otherNames()
    {
        $nameParts = explode(' ', $this->name);
        return count($nameParts) > 2 ? implode(' ', array_slice($nameParts, 2)) : '';
    }

    //get other names
    public function getOtherNamesAttribute()
    {
        return $this->otherNames();
    }

    public function defaultProfilePhotoUrl()
    {
        $name = trim(collect(explode(' ', $this->name))->map(function ($segment) {
            return mb_substr($segment, 0, 1);
        })->join(' '));

        $email = trim($this->email);
        $email = strtolower($email);
        $email = md5($email);

        return 'https://www.gravatar.com/avatar/'.$email.'?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/'.urlencode($name).'/300/EBF4FF/7F9CF5';
    }

    //accessor for birthday

    public function getBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * The subjects that belong to the User.
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }

    /**
     * Get the county that the user belongs to.
     */
    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }

    /**
     * Get validation rules based on user role
     */
    public static function getValidationRules($role = null)
    {
        // Base required fields for all users
        $baseRules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'gender' => 'required|in:male,female',
        ];

        if ($role === 'student') {
            return array_merge($baseRules, [
                // Additional required field for students
                'admission_number' => 'required|string|unique:student_records',
                
                // All other fields are nullable for students
                'phone' => 'nullable|string',
                'id_number' => 'nullable|string',
                'passport_number' => 'nullable|string',
                'birthday' => 'nullable|date',
                'address' => 'nullable|string',
                'blood_group' => 'nullable|string',
                'denomination' => 'nullable|string',
                'county_id' => 'nullable|exists:counties,id',
                'city' => 'nullable|string',
            ]);
        }

        // Rules for superadmin, admin, teacher, parent
        return array_merge($baseRules, [
            // Additional required fields for non-students
            'phone' => 'required|string',
            'id_number' => 'required_without:passport_number|string',
            'passport_number' => 'required_without:id_number|string',
            
            // Optional fields for non-students
            'birthday' => 'nullable|date',
            'address' => 'nullable|string',
            'blood_group' => 'nullable|string',
            'denomination' => 'nullable|string',
            'county_id' => 'nullable|exists:counties,id',
            'city' => 'nullable|string',
        ]);
    }
}
