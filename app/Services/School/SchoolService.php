<?php

namespace App\Services\School;

use App\Exceptions\ResourceNotEmptyException;
use App\Models\School;
use App\Services\User\UserService;
use Illuminate\Support\Str;
use Storage;

class SchoolService
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * User service constructor.
     */
    public function __construct(UserService $user)
    {
        $this->userService = $user;
    }

    /**
     * Get the school.
     *
     * @param int|null $id
     * @return School
     */
    public function getSchool(int $id = null): School
    {
        // Since we're using a single school system, always return the first school
        return School::first();
    }

    /**
     * Get the school by ID.
     *
     * @param int $id
     * @return School
     */
    public function getSchoolById(int $id): School
    {
        // Since we're using a single school system, always return the first school
        return School::first();
    }

    /**
     * Update school.
     *
     * @param School $school
     * @param array $record
     *
     * @return School
     */
    public function updateSchool(School $school, array $record): School
    {
        if (isset($record['logo'])) {
            if ($school->logo_path) {
                Storage::disk('public')->delete($school->logo_path);
            }
            $record['logo_path'] = Storage::disk('public')->put('schools', $record['logo']);
            unset($record['logo']);
        }

        $school->update($record);

        return $school;
    }
}
