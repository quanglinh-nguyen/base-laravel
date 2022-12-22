<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcronymsBankingRequest extends FormRequest
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
        $rules = [];
        if ($this->method() == "POST") {
            $rules = [
                'acronym' => ['required', Rule::unique('banks')],
                'full_name' => ['required', Rule::unique('banks')],
            ];
        }

        if ($this->method() == "PUT") {
            $rules = [
                'acronym' => ['required', Rule::unique('banks')->ignore($this->acronyms_banking)],
                'full_name' => ['required', Rule::unique('banks')->ignore($this->acronyms_banking)],
            ];
        }

        return $rules;
    }
}
