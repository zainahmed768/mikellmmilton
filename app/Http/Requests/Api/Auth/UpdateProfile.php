<?php
namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'         => 'required|string|max:255',
            'phone_number' => 'required',
            'username'     => 'required|string|max:255|unique:users,username,' . $this->user()->id,
            'email'        => 'required|email|max:255|unique:users,email,' . $this->user()->id,
            'image'        => 'nullable',
        ];
    }
}
