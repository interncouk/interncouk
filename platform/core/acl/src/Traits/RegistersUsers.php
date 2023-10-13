<?php

namespace Botble\ACL\Traits;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    public function showRegistrationForm()
    {
        return null;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        $this->registered($request, $user);

        return $this->registered($request, $user)
            ?: redirect()->route('public.account.settings');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function registered(Request $request, $user)
    {
        return redirect()->route('public.account.settings');
    }
}
