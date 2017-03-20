<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'txtName' => 'required|unique:products,name',
            'fImages' => 'required|image'
		];
	}
	public function messages()
    {
        return [
            'sltParent.required' => 'Vui lòng chọn danh mục!',
            'txtName.required' => 'Vui lòng nhập tên sản phẩm!',
            'txtName.unique' => 'Tên sản phẩm này đã tồn tại!',
            'fImages.required' => 'Vui lòng chọn hình ảnh!',
            'fImages.image' => 'Tệp này không phải hình ảnh!'

        ];
    }

}
