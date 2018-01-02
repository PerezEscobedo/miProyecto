<?php

namespace App\Http\Controllers\Pruebas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtroController extends Controller
{
    //
    public function index(){
      $users=[
        'Joel',
        'Elle',
        'tess',
        'Tommy',
        'Bill'
      ];
      $title='Lista de Usuarios';

    /*  return view('Users', [
         'users'=>$users,
         'title'=>$title   ]);
    /*   return view('Users')
          -> with('users', $users)
          -> with('title',$title);*/
          return view('UsersB', compact('title','users'));
           }


     public function valor($id){
                $titulo="este es mi titulo";
               return view('usersview', compact('id','titulo'));
                        }



   public function Saludo($nombre,$apellido=null){
        if($apellido){
            return "Hola tu nombre es  {$nombre} y tu apellido  {$apellido}";
        }else{
            return "Hola tu nombre es  {$nombre}";
    }
  }


  /*public function SaludoSoldado($nombre){
           return view('SaludoSoldado' ['saludo'=> $nombre] );

   }*/


}
