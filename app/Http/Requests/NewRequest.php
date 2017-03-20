<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewRequest extends Request {

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
			'sltParent' => 'required',
			'txtName' => 'required|unique:news,name',
            'fImages' => 'required|image'
		];
	}
	public function messages()
    {
        return [
            'sltParent.required' => 'Vui lòng chọn danh mục!',
            'txtName.required' => 'Vui lòng nhập tên tin tức!',
            'txtName.unique' => 'Tên của tin tức này đã tồn tại!',
            'fImages.required' => 'Vui lòng chọn hình ảnh!',
            'fImages.image' => 'Tệp này không phải hình ảnh!'

        ];
    }

}
