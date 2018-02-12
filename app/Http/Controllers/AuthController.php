<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Http\Request\LoginUserRequest;
class AuthController extends Controller
{
  public function register(){

  // $credentials =  User::create([
  //     'email'    => 'example2@example.com',
  //     'password' => bcrypt('secret'),
  //     'username'=> 'Hector',
  //       ]);
    // dd($credentials);
    $user =Sentinel::findById(2);
     Activation::create($user);
  }
  public function login(){
    return view('auth.login');
  }
  public function loginVerify(LoginUserRequest $request){
    $credentials = [
      'login'=>$request->input('email'),
    ];
    if($user = Sentinel::findByCredentials($credentials)){
      if(!Activation::completed($user)){
        return view('errors.autorization-remaining',[
          'usernotfound'=>$user->nombre.' '.$user->apellido_paterno,
        ]);

      }else{
        if($user= Sentinel::authenticate($request->all())){
          if(Sentinel::login($user)){
            if(Sentinel::inRole('admin')){
              return redirect('/Admin');
            }
            else if(Sentinel::inRole('analist')){
              return redirect('/Analist');
            }
          }
          else{
            $user = Sentinel::check();
            Sentinel::logout(null, true);
            dd($user->nombre);
            return view('errors.autorization-remaining',[
              'user'=>$user->nombre.' '.$user->apellido_paterno,
            ]);
          }

        }else{
          return Redirect::to('/Login')->withErrors(['failed'=>'La contraseña no es correcta, por favor intentalo nuevamente.']);;
        }

      }
    }else{
      return Redirect::to('/Login')->withErrors(['failed'=>'Los datos introducidos no coinciden, por favor intentalo nuevamente.']);;
    }

  }
}
