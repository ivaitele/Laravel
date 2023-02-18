<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalCodeRule implements Rule
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

    public function isCodeValid($code): bool
    {

        $firstNr = intval(substr($code, 0, 1));
        $year = intval(substr($code, 1, 2));
        $month = intval(substr($code, 3, 2));
        $day = intval(substr($code, 5, 2));
        $lastNr = intval(substr($code, 7, 4));

        $isValidFirstNr = $firstNr > 2 && $firstNr < 7;
        $isValidYear = $year >= 0 && $year < 100;
        $isValidMonth = $month > 0 && $month < 13;
        $isValidDay = $day > 0 && $day < 32;
        $isValidLastNr = $lastNr > 0 && $lastNr < 10000;

        if (strlen($code) != 11) {
            $this->validationMessage = 'Neteisingas kodo ilgis';
            return false;
        }

        if (!$isValidFirstNr) {
            $this->validationMessage = 'Neteisingas pirmasis skaitmuo';
            return false;
        }

        if (!$isValidYear) {
            $this->validationMessage = 'Neteisingi metai';
            return false;
        }

        if (!$isValidMonth) {
            $this->validationMessage = 'Neteisingas menuo';
            return false;
        }

        if (!$isValidDay) {
            $this->validationMessage = 'Neteisinga diena';
            return false;
        }


        if (!$isValidLastNr) {
            $this->validationMessage = 'Neteisingai paskutiniai skaitmenys';
            return false;
        }

        return true;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    public function passes($attribute, $value): bool
    {
        return $this->isCodeValid($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Laukelio :attribute ' . $this->validationMessage;

    }

}
