<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Model\UserAdapter as User;

class OnRegisterVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The User instance.
     *
     * @var user
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $url = route('front.verification.verifyEmail', ['token' => $this->user->token]);

        return $this->markdown('emails.front.verification.email-confirmation')
                    ->with([
                        'url' => $url,
                    ]);
    }
}
