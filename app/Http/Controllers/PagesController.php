<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller {
	
	public function getIndex(){
		return view ('pages.welcome');
	}
	public function getContact(){
		return view ('pages.contact');
	}
	public function getAbout(){
		$first='priya';
		$last='bnz';
		$fullname=$first . " " . $last;
		$email='priyab@g.com';
		$data=[];
		$data['email']=$email;
		$data['fullname']=$fullname;
		// return view ('pages.about',compact("fullname"));
		return view ('pages.about')->withData($data);
		// return view ('pages.about')->withFullname($fullname);
	}
}

