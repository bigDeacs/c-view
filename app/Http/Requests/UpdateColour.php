<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateColour extends Request {

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
			'name' => 'required|unique:colours,name,'.$this->get('id'),
			'hex' => 'required|unique:colours,hex,'.$this->get('id'),
		];
	}

}
