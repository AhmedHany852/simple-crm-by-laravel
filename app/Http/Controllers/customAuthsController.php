<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class customAuthsController extends Controller
{
    public function login(){
        return view("customauth.login") ;
    }
    public function registration(){
        return view ("customauth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email| Unique:users' ,
            'password'=>'required| min :7| max:50'

        ]);
        $user= new User();
        $user->name =$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $res= $user->save();
        return redirect()->route('login');  
        if ($res){
            return back()->with('success','you have regsterion succes');
        }
        else{
            return back()->with('fail','something worng');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required' ,
            'password'=>'required'
        ]);
       
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('clients.index');
        }else{
            return redirect()->route('login');
        }
    }
    public function logoutUser(Request $request) {
        Auth::logout();
        return redirect('login');
      }
}
