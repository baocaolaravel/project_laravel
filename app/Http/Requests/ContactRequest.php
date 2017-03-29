<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request {

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
        return [
            'txtName' => 'required',
            'txtEmail' => 'required',
            'txtTelno' => 'required',
			'txtAddress' => 'required',
        ];
	}
    public function messages()
    {
        return [
            'txtName.required' => 'Vui lòng nhập tên khách hàng',
            'txtEmail.required' => 'Vui lòng nhập email khách hàng',
            'txtTelno.required' => 'Vui lòng nhập số điện thoại khách hàng',
            'txtAddress.required' => 'Vui lòng nhập địa chỉ khách hàng'
        ];
    }

}
