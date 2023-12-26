<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
     public function __construct()
     {
          $this->middleware('guest', ['except' => ['logout']]);
          $this->middleware('auth', ['only' => ['logout']]);
     }

     public function index()
     {
          return view('login.index');
     }

     public function authenticate(Request $request){
               $validator = Validator::make($request->all(), [
                    'username'      => 'required',
                    'password'      => 'required'
               ]);
          
          if ($validator->fails()) {
               return response()->json([
                    'status'    => 'error',
                    'errors'     => $validator->errors()
               ]);
          }

          $user = DB::table('users')->where('username', $request->username)->first();
          if (!$user) {
               return response()->json([
                    'status'    => 'error',
                    'toast'     => 'Username atau password salah!',
                    'resets'    => 'all'
               ]);
          }

          $credentials = [
               'username'      => $request->username,
               'password'      => $request->password
          ];

          if (Auth::attempt($credentials)) {

               $request->session()->regenerate();

               $session = [
                    'username'      => $request->username,
               ];

               Session::put($session);
               return response()->json([
                    'status'    => 'success',
                    'toast'     => 'Login berhasil',
                    'resets'    => 'all',
                    'redirect'  => route('dashboard')
               ]);
          } else {
               return response()->json([
                    'status'    => 'error',
                    'toast'     => 'Username atau password salah!',
                    'resets'    => 'all'
               ]);
          }

          return response()->json([
               'status'    => 'error',
               'toast'     => 'Login gagal, silahkan tunggu beberapa saat lagi atau hubungi administrator'
          ]);
     }

     public function logout(Request $request)
     {
          Auth::logout();

          $request->session()->invalidate();

          $request->session()->regenerateToken();

          return redirect(route('auth.login'));
     }

}
