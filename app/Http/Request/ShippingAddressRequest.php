<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Form\Front\ShippingAddressForm;

class ShippingAddressRequest extends FormRequest
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
        return (new ShippingAddressForm)->getValidationRules();
    }

    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if ($validator->failed()) {
                $validator->errors()->add('shipping-address-form', 'Something is wrong with this field!');
            }
        });
    }
}
