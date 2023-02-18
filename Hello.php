<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

Class Hello extends Controller
{
	function savedataform()
	{
		return view('forminsert');
	}
	function savedata()
	{
		$name=$request->input->("name");
		$email=$request->input->("email");
		$password=$request->input->("password");
		$phone=$request->input->("phone");
	}
}

?>