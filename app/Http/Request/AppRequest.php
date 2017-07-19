<?php

namespace App\Http\Requests;

use Illuminate\Http\Request as BaseRequest;
use Auth;
use App\Factory\QuizFactory;
use App\Model\UserAdapter as User;
use App\Quiz\AbstractUIQuiz;

class AppRequest extends BaseRequest
{
    public function getUIQuiz(): AbstractUIQuiz
    {
        $user = User::find(Auth::id());

        return QuizFactory::get($user);
    }

    public function getSection()
    {
        $slug = $this->route()->parameter('slug');

        return $this->getUIQuiz()->getSectionBySlug($slug);
    }
}
