<?php

namespace App\Http\Controllers\Auth;
use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/usuario/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function loginUsuario(){
        $input = Input::all();

        $usuario = Usuario::where('login', $input['login'])->first();

        if(!is_null($usuario))
            if($usuario->senha == $input['password']){
                Auth::guard('usuarios')->login($usuario);
                return redirect(url('usuario/evento'));
            }
            else
                return back();
         else
             return back();

     }
}
