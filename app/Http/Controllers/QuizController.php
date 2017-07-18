<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form\NewQuizForm;
use App\Model\QuizAdapter as Quiz;
use Auth;
use App\Model\UserAdapter as User;

class QuizController extends Controller
{
    /**
     * The user selection determines a quiz type provided by the QuizFactory
     */
    public function new()
    {
        $form = new NewQuizForm;

        $form->setFields();

        return view('front/quiz/new', compact('form'));
    }

    /**
     * The front.quiz.new view sends an email and outfit_type to create a new Quiz
     * User will be registered and she will be able to choose a password on email verification
     */
    public function create(Request $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            ]);

        $quiz = Quiz::create([
            'user_id' => $user->id,
            'outfit_type' => $request->outfit_type,
            'started_at' => new \DateTime,
            ]);

        return $quiz;
    }
}
