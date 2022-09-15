<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesRepresentativeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255' ,
            'contact_number' => 'required|unique:sales_representatives,contact_number,',//. $this->route('sales-representative'),
            'email' => 'required|email|unique:sales_representatives,email,',//. $this->route('sales-representative'),
            'joined_date' => 'required|date' ,
            'route_id' => 'required' ,
        ];
    }
}
