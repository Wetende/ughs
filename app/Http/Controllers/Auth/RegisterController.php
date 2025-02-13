<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\StudentRecord;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /**
     * Handle a registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        try {
            // Start database transaction
            DB::beginTransaction();

            $role = $request->input('role', 'student');
            
            // Get validation rules based on role
            $validationRules = User::getValidationRules($role);
            
            // Add student-specific validation if role is student
            if ($role === 'student') {
                $validationRules = array_merge(
                    $validationRules,
                    StudentRecord::getValidationRules()
                );
            }

            // Validate the request
            $validator = Validator::make($request->all(), $validationRules);
            
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            // Create the user
            $userData = $validator->validated();
            
            // Remove student record data from user data if role is student
            if ($role === 'student') {
                $studentData = array_intersect_key($userData, array_flip([
                    'admission_number',
                    'admission_date',
                    'my_class_id',
                    'section_id'
                ]));
                
                $userData = array_diff_key($userData, $studentData);
            }

            // Hash the password
            $userData['password'] = Hash::make($userData['password']);
            
            // Create the user
            $user = User::create($userData);
            
            // Assign role
            $user->assignRole($role);

            // Create student record if role is student
            if ($role === 'student') {
                $studentData['user_id'] = $user->id;
                StudentRecord::create($studentData);
            }

            // Commit transaction
            DB::commit();

            // Fire registered event
            event(new Registered($user));

            return response()->json([
                'message' => 'Registration successful',
                'user' => $user->load('roles')
            ], 201);

        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();
            
            throw $e;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @param  string  $role
     * @return array
     */
    protected function rules($role)
    {
        return User::getValidationRules($role);
    }
}
