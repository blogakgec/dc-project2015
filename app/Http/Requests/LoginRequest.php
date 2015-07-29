<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Admins;

class LoginRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{	
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$admins= Admins::all();
		 
		foreach ($admins as $admin) {
			
			if ($admin->name==$username && $admin->password==$password) {
				
				//Flush all Session data
				\Session::flush();
				//Session starts
				\Session::put('current_user', $admin->name);
				\Session::put('user_id', $admin->id);

				return true;

				}
			
			}
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//Login rules
		'username' => 'required | min:5 | max:10',
		'password' => 'required | min:5 | max:10',

		];
	}

}
