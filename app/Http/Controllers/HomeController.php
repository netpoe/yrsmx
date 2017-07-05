<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form\RegisterForm;
use App\Http\Requests\RegisterUser;
use App\ModelAdapters\UserAdapter as User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OnRegisterVerification;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = $this->schedule;

        $registerForm = new RegisterForm;
        $registerForm->setFields();

        return view('front/home/index', compact('schedule', 'registerForm'));
    }

    public function register(RegisterUser $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            ]);

        Mail::to($user)->send(new OnRegisterVerification($user));

        return redirect()->route('front.home.verification-email-sent');
    }

    public function welcome(String $token)
    {
        try {
            $user = User::where('token', $token)
                ->firstOrFail()
                ->confirmEmail()
                ->createEmptyAddress();
        } catch (\Exception $e) {
            return abort(404);
        }

        $remember = true;

        Auth::login($user, true);

        if (!Auth::check()) {
            return abort(404);
        }

        // TODO: show referral code and make logic

        // TODO send welcome email with link to continue with the application

        $UIApplication = request()->getUIApplication();

        $slug = $UIApplication->getSectionSlugs()[0];

        $url = route('front.application.seccion', ['slug' => $slug]);

        return view('front.home.welcome', ['url' => $url]);
    }

    public function verificationEmailSent()
    {
        return view('front.home.verification-email-sent');
    }
}
