<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\Rss;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
	
	public function __construct(){
 		#$this->middleware('auth',['except' => ['index','show']]);
		
		
		
 	}   

    public function index(){
    	return view('cadastro_usuario');
    }

    public function show($id){
    	
    }

    public function cadastra(Request $request){
		$usuarios = new Usuario;
    	$usuarios->nome = $request->nome;
    	$usuarios->email = $request->email;
    	$usuarios->password = bcrypt($request->password);
    	$status = $usuarios->save();
		if($status)
			$msg = 'cadastrado com sucesso!';
		else
			$msg = 'não foi possível cadastrar!';
		return view('cadastro_efetuado')->with('msg',$msg);
    }

    public function update(Request $request, $id){
    	
    }

    public function destroy($id){
    	
    }
	
	public function login(Request $request){
		if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'ativo' => 'S'])){
			$rss = Rss::getRssGoogleNoticias();
			return view('lista_rss')->with('noticias',$rss);
        }else{
			return Redirect::to('/');
        }
	}
	
	public function logout(){
		Session::flush(); 
        return Redirect::to('/');
	}
  
}
