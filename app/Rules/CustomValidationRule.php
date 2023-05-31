<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Restaurant;

class CustomValidationRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // return Restaurant::where('restaurant_name', $value)->exists();
        //  //return preg_match('/^[A-Za-z\s]+$/', $value);
        return preg_match('/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The email must only contain letters and spaces.';
    }
}
