<?php
/**
 * Created by PhpStorm.
 * User: jakeline
 * Date: 17/04/2019
 * Time: 20:20
 */

namespace generator\project\Http\Controllers;

use generator\project\Models\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;
use Tymon\JWTAuth\Payload;

use Illuminate\Http\Resources\Json;


class UserController extends Controller
{
    public function index()
    {
        return view('project::welcome');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->json()->all() , [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->json()->get('name'),
            'email' => $request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
        ]);

//        $aux= $user['id'];
//        $aux=DB::table('users')->find($user['id']);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }


    public function getUser(Request $request){
//        $array = DB::table('users')->find($request['id']);
        $array  = DB::table('users')->where('email', $request['email'])->first();
        return response()->json($array);

    }


    public function login(Request $request)
    {
        $credentials = $request->json()->all();
        try {

            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }

            $user  = DB::table('users')->where('email', $credentials['email'])->value('status');

            if ( $user == '0'){
                return response()->json(['error' => 'usuario_suspendido'], 400);
            }

        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json( compact('token','user'));
    }



    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }

}
