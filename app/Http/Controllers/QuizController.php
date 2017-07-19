<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewQuizRequest;
use App\Http\Requests\SectionRequestDispatcher;
use App\Form\NewQuizForm;
use App\Model\QuizAdapter as Quiz;
use Auth;
use App\Model\UserAdapter as User;
use App\Factory\QuizFactory;

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
    public function create(NewQuizRequest $request)
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());
        } else {
            $user = (new User)->new($request->input('email'));

            $remember = true;

            Auth::login($user, $remember);

            if (!Auth::check()) {
                return abort(404);
            }
        }

        $quiz = Quiz::create([
            'user_id' => $user->id,
            'outfit_type' => $request->outfit_type,
            'started_at' => new \DateTime,
            ]);

        $quiz->createUserSizes();

        $uiQuiz = QuizFactory::get($user);

        return redirect()
            ->route('front.quiz.section', [
                'quiz' => $quiz->id,
                'slug' => $uiQuiz->getFirstSectionSlug(),
                ]);
    }

    public function section(Request $request, Quiz $quiz)
    {
        $section = $request->getSection();

        $section->setFields();

        return view('front/quiz/section', [
            'section' => $section,
            'quiz' => $quiz,
            ]);
    }

    public function store(Request $request, SectionRequestDispatcher $dispatcher, Quiz $quiz)
    {
        $section = $request->getSection();

        $section->setFields();

        $section->save();

        return redirect()
            ->route('front.quiz.section', [
                'quiz' => $quiz->id,
                'slug' => 'altura-y-peso'
            ]);
    }
}
