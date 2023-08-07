<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinLengthAndNumeric implements Rule
{
    protected $minLength;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($minLength)
    {
        //
        $this->minLength = $minLength;
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
        //
        return is_numeric($value) && strlen($value) >= $this->minLength;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute must be a numeric value with a minimum length of {$this->minLength}.";
    }
}
