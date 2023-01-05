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
        if ($this->method() == "POST") {
            $rules = [
                'acronym' => [
                    'required',
                    Rule::unique('acronyms')->where(
                        function ($query) use ($request){
                            return $query->where(
                                [
                                    ['acronym','=', $request->acronym],
                                    ['acronym_column','=', $request->acronym_column],
                                ]
                            );
                        }
                    ),
                    'not_regex:/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/'
                ],
                'acronym_column' => [
                    'required',
                    Rule::unique('acronyms')->where(
                        function ($query) use ($request){
                            return $query->where(
                                [
                                    ['acronym','=', $request->acronym],
                                    ['acronym_column','=', $request->acronym_column],
                                ]
                            );
                        }
                    )
                ],
                'full_name' => [
                    'required',
                    'not_regex:/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/'
                ],
            ];
        }

        if ($this->method() == "PUT") {
            $rules = [
                'acronym' => [
                    'required',
                    Rule::unique('acronyms')->where(
                        function ($query) use ($request){
                            return $query->where(
                                [
                                    ['acronym','=', $request->acronym],
                                    ['acronym_column','=', $request->acronym_column],
                                ]
                            );
                        }
                    )->ignore($this->acronyms_field),
                    'not_regex:/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/'
                ],
                'acronym_column' => [
                    'required',
                    Rule::unique('acronyms')->where(
                        function ($query) use ($request){
                            return $query->where(
                                [
                                    ['acronym','=', $request->acronym],
                                    ['acronym_column','=', $request->acronym_column],
                                ]
                            );
                        }
                    )->ignore($this->acronyms_field)
                ],
                'full_name' => [
                    'required',
                    'not_regex:/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/'
                ],
            ];
        }

        return $rules;
    }
}
