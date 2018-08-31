<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use \App\User;
use Auth;
class SocialLoginController extends Controller
{
     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        // $userSocial = Socialite::driver('github')->stateless()->user();
        // dd($userSocial->getName());
        // $userSocial = Socialite::driver($social)->user();
 
        try {
            $user = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            // return Redirect::to('auth/github');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('/');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $githubUser
     * @return User
     */
    private function findOrCreateUser($githubUser)
    {
        if ($authUser = User::where('provider_id', $githubUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'provider_id' => $githubUser->id,
            'provider' => $githubUser->avatar,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }


}
