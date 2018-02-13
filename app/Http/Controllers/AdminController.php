<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class AdminController extends Controller
{
    public function dashboard(){
      $user = Sentinel::check();
      return view('admin.dashboard',[
        'user'=>$user,
      ]);
    }
    public function siniestros(){
      $user = Sentinel::check();
      return view('admin.siniestros',[
        'user'=>$user,
      ]);
    }
    public function mensajes(){
      $user = Sentinel::check();
      return view('admin.mensajes',[
        'user'=>$user,
      ]);
    }
    public function estadisticas(){
      $user = Sentinel::check();
      return view('admin.estadisticas',[
        'user'=>$user,
      ]);
    }
    public function calendario(){
      $user = Sentinel::check();
      return view('admin.calendario',[
        'user'=>$user,
      ]);
    }
    public function archivos(){
      $user = Sentinel::check();
      return view('admin.archivos',[
        'user'=>$user,
      ]);
    }

}
