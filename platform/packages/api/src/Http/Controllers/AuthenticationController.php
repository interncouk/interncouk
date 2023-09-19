<?php

namespace Botble\Api\Http\Controllers;

use Botble\Api\Facades\ApiHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Api\Http\Requests\LoginRequest;
use Botble\Api\Http\Requests\RegisterRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    /**
     * Register
     *
     * @bodyParam first_name string required The name of the user.
     * @bodyParam last_name string required The name of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam phone string required The phone of the user.
     * @bodyParam password string  required The password of user to create.
     * @bodyParam password_confirmation string  required The password confirmation.
     *
     * @response {
     * "error": false,
     * "data": null,
     * "message": "Registered successfully! We emailed you to verify your account!"
     * }
     * @response 422 {
     * "message": "The given data was invalid.",
     * "errors": {
     *     "first_name": [
     *         "The first name field is required."
     *     ],
     *     "last_name": [
     *         "The last name field is required."
     *     ],
     *     "email": [
     *         "The email field is required."
     *     ],
     *     "password": [
     *         "The password field is required."
     *     ]
     *   }
     * }
     *
     * @group Authentication
     */
    
    /**
     * Login
     *
     * @bodyParam login string required The email/phone of the user.
     * @bodyParam password string required The password of user to create.
     *
     * @response {
     * "error": false,
     * "data": {
     *    "token": "1|aF5s7p3xxx1lVL8hkSrPN72m4wPVpTvTs..."
     * },
     * "message": null
     * }
     *
     * @group Authentication
     */
    public function login(LoginRequest $request, BaseHttpResponse $response)
    {
        if (Auth::guard(ApiHelper::guard())->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            $token = $request->user(ApiHelper::guard())->createToken($request->input('token_name', 'Personal Access Token'));

            return $response
                ->setData(['token' => $token->plainTextToken]);
        }

        return $response
            ->setError()
            ->setCode(422)
            ->setMessage(__('Email or password is not correct!'));
    }

    /**
     * Logout
     *
     * @group Authentication
     * @authenticated
     */
    public function logout(Request $request, BaseHttpResponse $response)
    {
        if (! $request->user()) {
            abort(401);
        }

        $request->user()->tokens()->delete();

        return $response
            ->setMessage(__('You have been successfully logged out!'));
    }
}
