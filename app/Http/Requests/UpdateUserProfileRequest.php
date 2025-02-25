<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nationality' => 'required|in:Kenyan,Foreign',
            'state' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'other_names' => 'nullable|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'blood_group' => 'nullable|string|max:255',
            'denomination' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes()
    {
        return [
            'state' => $this->input('nationality') === 'Kenyan' ? 'county' : 'country',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        $stateLabel = $this->input('nationality') === 'Kenyan' ? 'county' : 'country';
        
        return [
            'nationality.required' => 'Please select your nationality',
            'nationality.in' => 'Please select either Kenyan or Foreign nationality',
            'state.required' => "Please enter your {$stateLabel}",
        ];
    }
}
