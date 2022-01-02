<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'avatar' => ['string'],
            'phone' => ['required', 'string', 'min:9', 'max:20', 'unique:users'],
            'address' => ['string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'bio' => ['string', 'max:500'],
            'city' => ['string', 'max:50'],
            'country' => ['string', 'max:50'],
            'experience' => ['integer', 'max:100'],
            'certificates' => ['string'],
            'internship' => ['string'],
        ];
    }
}
