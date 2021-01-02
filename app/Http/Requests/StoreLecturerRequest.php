<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreLecturerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'webinar_title' => 'required|string|max:255',
            'hours' => 'required|string|max:255',
            'join_reason' => 'required|string',
            'freelance_experience' => 'required|string',
            'description' => 'required|string',
            'detailed_description' => 'required|string'
        ];
    }
}
