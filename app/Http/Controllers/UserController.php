<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\ResourceInterface;
use App\Http\Requests\UserRegisterRequest;



class UserController extends Controller
{
    protected $resource_interface;
    public function __construct(
        ResourceInterface $resource_interface
    ) {
        $this->resource_interface = $resource_interface;
    }
    public function login(UserRequest $user_request){
        try {
            $user_request->validated();
            $user_info = User::where('email', $user_request->email)->first();
            if(isset($user_info)){
                if($user_info['deleted_at'] != null){
                    return response()->json([
                        'msg' => "User account is deactivated <br> Please call administrator."
                    ], 402);
                }
                if(!Auth::attempt(  [
                    'email' => $user_request->email,
                    'password' => $user_request->password
                ])  ){
                    return response()->json([
                        'msg' => "Username or Password is incorrect"
                    ], 401);
                }
                $user_request->session()->put('id', Auth::user()->id);
                $user_request->session()->put('username', Auth::user()->email);
                return response()->json(['msg' => 'Login Successful','userData' => Auth::user()]);
            }
            else{
                return response()->json(['result' => 0, 'msg' => 'User Not Registered!'], 404);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function saveUserInfo(UserRegisterRequest $request){
        date_default_timezone_set('Asia/Manila');
        try {
            $data=[
                'name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make('we12345'),
                'created_at' => date('Y-m-d H:m:s'),
            ];
            return $this->resource_interface->create(User::class,$data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function check_session(Request $request){
        try {
            $var = $request->session()->get('id');
            $var1 = $request->session()->get('username');
            $var2 = $request->session()->token();
            return response()->json(['session_id' => $var,'session_user' => $var1, 'token' => $var2]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function logout(Request $request){
        try {
            $var = $request->session()->forget(['id','username']);
            return response()->json(['is_success' => 'true']);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
