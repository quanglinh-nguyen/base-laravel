<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
        $regex_not_special = '/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/';
        $rule_unique = Rule::unique('acronyms')->where(
            function ($query) use ($request){
                return $query->where(
                    [
                        ['industry', $request->industry],
                        ['organization_eng', $request->organization_eng],
                        ['organization_viet', $request->organization_viet],
                        ['name', $request->name],
                        ['mobile', $request->mobile],
                        ['business_email', $request->business_email],
                        ['personal_email', $request->personal_email],
                    ]
                );
            }
        );

        if ($this->method() == "POST") {
            $rules = [
                'industry' => [
                    'required',
                    'not_regex:'.$regex_not_special
                ],
                'organization_eng' => [
                    'required_without:organization_viet',
                    $rule_unique,
                ],
                'organization_viet' => [
                    'required_without:organization_eng',
                    $rule_unique,
                ],
                'name' => [
                    $rule_unique,
                ],
                'mobile' => [
                    $rule_unique,
                ],
                'business_email' => [
                    $rule_unique,
                ],
                'personal_email' => [
                    $rule_unique,
                ],
            ];
        }

        if ($this->method() == "PUT") {
            $rules = [
                'industry' => [
                    'required',
                    'not_regex:'.$regex_not_special
                ],
                'organization_eng' => [
                    'required_without:organization_viet',
                    $rule_unique->ignore($this->customer),
                ],
                'organization_viet' => [
                    'required_without:organization_eng',
                    $rule_unique->ignore($this->customer),
                ],
                'name' => [
                    $rule_unique->ignore($this->customer),
                ],
                'mobile' => [
                    $rule_unique->ignore($this->customer),
                ],
                'business_email' => [
                    $rule_unique->ignore($this->customer),
                ],
                'personal_email' => [
                    $rule_unique->ignore($this->customer),
                ],
            ];
        }

        return $rules;
    }
}
