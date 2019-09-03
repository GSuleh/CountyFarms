<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

	public function addDetails(Request $request){
	    $firstname = $request->firstname;
	    $lastname = $request->lastname;
	    $gender = $request->gender;
	    $aboutme = $request->aboutme;
	    $postalcode = $request->postalcode;
	    $nationalid = $request->nationalid;
	    $kra = $request->kra;

	    $details = new User();
	    $details->firstname = $firstname;
	    $details->lastname = $lastname;
	    $details->gender = $gender;
	    $details->aboutme = $aboutme;
	    $details->postalcode = $postalcode;
	    $details->nationalid = $nationalid;
	    $details->kra = $kra;
	    $details->save();
	    return $details;
  }


  public function getAllUsers() {
  	return User::all();
  }

  public function create() {
    return view('layouts.create');
  }


  public function store(Request $request) {
    
    }

    public function edit(User $users) {
      
    }

      public function update(){
    
    }

}
