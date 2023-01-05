<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcronymsRequest extends FormRequest
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
        $request = $this;
        $rules = [];
        $rule_unique = Rule::unique('acronyms')->where(
            function ($query) use ($request){
                return $query->where(
                    [
                        ['acronym','=', $request->acronym],
                        ['acronym_column','=', $request->acronym_column],
                    ]
                );
            }
        );
        $regex_not_special = '/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/';
        if ($this->method() == "POST") {
            $rules = [
                'acronym' => [
                    'required',
                    $rule_unique,
                    'not_regex:'.$regex_not_special
                ],
                'acronym_column' => [
                    'required',
                    $rule_unique
                ],
                'full_name' => [
                    'required',
                    'not_regex:'.$regex_not_special
                ],
            ];
        }

        if ($this->method() == "PUT") {
            $rules = [
                'acronym' => [
                    'required',
                    $rule_unique->ignore($this->acronyms_field),
                    'not_regex:'.$regex_not_special
                ],
                'acronym_column' => [
                    'required',
                    $rule_unique->ignore($this->acronyms_field)
                ],
                'full_name' => [
                    'required',
                    'not_regex:'.$regex_not_special
                ],
            ];
        }

        return $rules;
    }
}
