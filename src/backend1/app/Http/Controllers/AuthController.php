<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\User;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;


class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login', 'signup','profile']]);
    // }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
  

    public function register(Request $request)
    {
        //return 'done';
        $validator = Validator::make($request->json()->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
            'phone' => 'required|string|max:255',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = User::create([
            'name' => $request->json()->get('name'),
            'email' => $request->json()->get('email'),
            //'password' => $request->json()->get('password'),
            'password' =>Hash::make( $request->json()->get('password')),
            'phone' => $request->json()->get('phone')
        ]);
        $token=JWTAuth::fromUser($user);
        return response()->json(compact('user','token'),201);
        //return $this->login($request);
    }
   

    /** 
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
   
    public function login(Request $request)
    {
      
       $credentials = $request->json()->all();
    //return $credentials;
       try{
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Email or password does\'t exist'], 401);
        }

      }
      catch(JWTException $e){
        return response()->json(['error' => 'could_not_create_token'], 500);
       }
        return response()->json(compact('token'));
    }
 public function getAuthenticatedUser()
 {
     try{
         if(!$user = JWTAuth::parseToken()->authenticate()){
             return response()->json(['user_not_found'],404);
         }
     }catch(Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
        return response()->json(['token_expired'],$e->getStatusCode());

     }catch(Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
        return response()->json(['token_invalid'],$e->getStatusCode());
        
     }catch(Tymon\JWTAuth\Exceptions\JWTException $e){
        return response()->json(['token_absent'],$e->getStatusCode());
        
     }
     return response()->json(compact('user'));
 }
}