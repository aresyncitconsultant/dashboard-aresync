<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\libs\Response\GlobalApiResponse;
use App\libs\Response\GlobalApiResponseCodeBook;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Psr7\str;
use App\User;
use Session;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        return view('auth.login');
    }
    public function attrmptTogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if ($this->guard()->attempt($credentials)) {
            $request->session()->regenerate();
            return (new GlobalApiResponse())->success('Successfully logged in', 1);
        }
        return (new GlobalApiResponse())->error(GlobalApiResponseCodeBook::INVALID_CREDENTIALS, 'Invalid email or password', $this->authService->getErrors());
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return (new GlobalApiResponse())->success('User registered successfully', 1);
    }

    public function logout()
    {
        $this->guard()->logout();
        return (new GlobalApiResponse())->success('Logged out successfully.', 1);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if (Hash::check($request->password, Auth::user()->password) == false) {
            return (new GlobalApiResponse())->error(GlobalApiResponseCodeBook::NOT_AUTHORIZED, "You've entered incorrect current password", ['You\'ve entered incorrect current password']);
        }
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();
        return (new GlobalApiResponse())->success('Password successfully updated', 1);
    }

    public function user(Request $request)
    {
        $user = StudentUser::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }

    /**
     * Refresh JWT token
     */
    public function verify()
    {
        
    }

    /**
     * Return auth guard
     */
    private function guard()
    {
        return Auth::guard();
    }

    public function getTest(LoginRequest $request){
        $this->authService->login($request->all());
    }
}