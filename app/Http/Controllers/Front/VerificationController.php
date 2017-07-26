<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Factory\QuizFactory;
use App\Model\UserAdapter as User;

class VerificationController extends Controller
{
    public function verifyEmail(String $token)
    {
        try {
            $user = User::where('token', $token)
                ->firstOrFail()
                ->confirmEmail();
        } catch (\Exception $e) {
            return abort(404);
        }

        $quiz = $user->getLatestQuiz();

        $uiQuiz = QuizFactory::get($user);

        return redirect()
            ->route('front.quiz.section', [
                'quiz' => $quiz->id,
                'slug' => $uiQuiz->getFirstSectionSlug(),
                ]);
    }
}
