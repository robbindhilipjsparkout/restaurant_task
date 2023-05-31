<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
        
            'restaurant_name' => 'required|string',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|numeric',
            'secondary_mobile_number'=>'required|numeric',
            'restaurant_logo'=>'required|mimes:jpeg,png,jpg|image|max:2048',
            'restaurant_description'=>'required|string|max:1000',
            'restaurant_website'=>'required|string|url',
            'restaurant_address'=>'required|string|regex:/^[a-zA-Z0-9\s\-]+$/',
            'gst_number'=>'required|string|regex:/^[A-Za-z0-9]+$/',
            'status'=>'required',
    
        ];
    }

    public function messages()
{
    return [
       
            'restaurant_name.required' => ' Restaurant name is required.',
            'restaurant_name.string' => 'The restaurant name must be a string.',
            'restaurant_name.regex' => 'The restaurant name can only contain letters and spaces.',
            'email.required' => 'The email is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',
            'mobile_number.required' => 'The mobile number is required.',
            'mobile_number.numeric' => 'The mobile number must be a numeric value.',
            'secondary_mobile_number.required' => 'The secondary mobile number is required.',
            'secondary_mobile_number.numeric' => 'The secondary mobile number must be a numeric value.',
            'restaurant_logo.required' => 'The restaurant logo is required.',
            'restaurant_logo.file' => 'The restaurant logo must be a file.',
            'restaurant_logo.mimes' => 'The restaurant logo must be in JPEG, PNG, or JPG format.',
            'restaurant_logo.max' => 'The restaurant logo size must not exceed 10MB.',
            'restaurant_description.required' => 'The restaurant description is required.',
            'restaurant_description.string' => 'The restaurant description must be a string.',
            'restaurant_description.max' => 'The restaurant description must not exceed 1000 characters.',
            'restaurant_website.required' => 'The restaurant website is required.',
            'restaurant_website.string' => 'The restaurant website must be a string.',
            'restaurant_website.url' => 'The restaurant website must be a valid URL.',
            'restaurant_address.required' => 'The restaurant address is required.',
            'restaurant_address.string' => 'The restaurant address must be a string.',
            'restaurant_address.regex' => 'The restaurant address can only contain alphanumeric characters, spaces, and hyphens.',
            'gst_number.required' => 'The GST number is required.',
            'gst_number.string' => 'The GST number must be a string.',
            'gst_number.regex' => 'The GST number can only contain alphanumeric characters.',
            'status.required' => 'The status is required.',
        
    ];
}

}
