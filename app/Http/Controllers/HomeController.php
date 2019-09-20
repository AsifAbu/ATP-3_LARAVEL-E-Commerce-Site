<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
		//$data = ['name'=>'ABC', 'age'=>22];
		//return view('home.index', $data);

/*		return view('home.index')
				->with('name','ABC')
				->with('age', 22);*/

/*		return view('home.index')
				->withFirstName('ABC')
				->withAge(22);*/
/*		$v = view('home.index');
		$v->withName('XYZ');
		$v->withAge(33);
		 return $v;
*/
		 return view('index');
	}

	public function profileown(){
		return view('profileown');
	}
	public function restaurantshowdetail(){
		return view('restaurant.restaurantshowdetail');
	}
	public function restaurantshow(){
		return view('restaurant.restaurantshow');
	}
}
