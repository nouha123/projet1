<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;


use Input;
use Validator;
use Redirect;

use Auth;
use App\Admin;



class adminContoller extends Controller
{
    public function login(){
      $data=Input::except(array('token'));
        $rule=array(
            'username'=>'required',
            'password'=>'required',
        );

        $validator=Validator::make($data,$rule);
        if($validator->fails()){
            return Redirect::to('/')->withErrors($validator);

        }
        else{


           $userdata=array(
               
               'username'=>Input::get('username'),
            'password'=>Input::get('password'),
            );
            if(Auth::attempt($userdata)){
                return Redirect::to('/home');

            }
            else{

                return Redirect::to('/');
            }

        }

    }
}
