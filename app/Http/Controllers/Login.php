<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Login extends Controller
{	
	function login(){
        $error = false;
		return view('login/login')->with('error',$error);
	}

	function principal(Request $request) {
        $db = new bdd();
        $user = $request->input('user');
        $pwd = $request->input('pwd');
        
        $login = $db->getLogin($user, $pwd);
        
        if($login){
            return view('principal')->with('user',$user);
        } else {
            $error = 'Has puesto mal los datos';
            return view('login/login')->with('error',$error);
        }
		
	}
}

class bdd {
     private $user;
     private $pwd;
    
    function __construct(){
        $this-> user = 'test';
        $this-> pwd = 'test';
    }
    
    function getLogin ($user, $pwd){
        if($user == $this-> user){
            if($pwd == $this-> pwd){
                return true;
            } else return false;
        } else return false;
    }
}
?>