<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequestDispatcher extends FormRequest
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
        $slug = $this->slug;

        $UIApplication = request()->getUIApplication();

        $section = $UIApplication->getSectionBySlug($slug);

        $section->setFields();

        return $section->getValidationRules();
    }

    public function messages()
    {
        $slug = $this->slug;

        $UIApplication = request()->getUIApplication();

        $section = $UIApplication->getSectionBySlug($slug);

        $section->setFields();

        return $section->getValidationMessages();
    }
}
