<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $socialAccount = SocialAccount::where('provider_user_id', $googleUser->id)
                ->where('provider', 'google')
                ->first();

            if ($socialAccount) {
                $user = $socialAccount->user;
            } else {
                $user = User::firstOrCreate(
                    ['email' => $googleUser->email],
                    ['name' => $googleUser->name],
                    ['email_verified_at' => Carbon::now()]
                );

                $user->socialAccounts()->create([
                    'provider' => 'google',
                    'provider_user_id' => $googleUser->id,
                    'provider_json' => json_encode($googleUser),
                ]);
            }

            Auth::login($user);
            return redirect()->intended('dashboard');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }
    }
}


