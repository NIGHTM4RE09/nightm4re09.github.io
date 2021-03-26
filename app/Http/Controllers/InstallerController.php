<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 17/02/2018
 * Time: 11:17 AM
 */
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InstallerController extends Controller
{

	public function getIndex()
	{
		$name = 'admin@ecocel.com';
		$password = 'Ecocel2021';
		$user = User::where('email', $name )->first();
		if( is_null($user) )
		{
			User::create([
				'email' => $name,
				'name'	=> 'Gabriel Alejandro Mirabal Aguilar',
				'password' => Hash::make($password)
			]);
			print 'Done';
		}
		else
		{
			print 'Installed';
		}
	}

}