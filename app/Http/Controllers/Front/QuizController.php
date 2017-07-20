<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewQuizRequest;
use App\Http\Requests\SectionRequestDispatcher;
use App\Form\NewQuizForm;
use App\Model\QuizAdapter as Quiz;
use Auth;
use App\Model\UserAdapter as User;
use App\Factory\QuizFactory;
use App\Util\DateTimeUtil;

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
     * User will be registered and she will be able to choose a password after email verification
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
            'started_at' => DateTimeUtil::DBNOW(),
            ]);

        $quiz->createUserSizes()
            ->createUserPreferredBodyParts()
            ->createUserFit();

        $uiQuiz = QuizFactory::get($user);

        return redirect()
            ->route('front.quiz.section', [
                'quiz' => $quiz->id,
                'slug' => $uiQuiz->getFirstSectionSlug(),
                ]);
    }

    /**
     * Renders the sections of the selected UIQuiz
     * If the URL has no section slug, then check if the Quiz is complete and send to the complete action
     * else keep rendering the missing sections
     */
    public function section(Request $request, Quiz $quiz)
    {
        $section = $request->getSection();

        if (!$section) {
            $uiQuiz = $request->getUIQuiz();

            if ($uiQuiz->isComplete()) {
                $uiQuiz->onComplete();

                return redirect()->route('front.quiz.complete');
            }

            return redirect()
                ->route('front.quiz.section', [
                    'quiz' => $quiz,
                    'slug' => $uiQuiz->getPendingSection()->getSlug()
                    ]);
        }

        $section->setFields();

        $section->onEnter();

        return view('front/quiz/section', [
            'section' => $section,
            'quiz' => $quiz,
            ]);
    }

    /**
     * Validates and saves the section fields
     * If on save error renders a section error
     * if success, redirects to the next section
     */
    public function store(
        Request $request,
        SectionRequestDispatcher $dispatcher,
        Quiz $quiz,
        String $slug)
    {
        $section = $request->getSection();

        $section->setFields();

        $section->save();

        if ($section->hasError()) {
            return redirect()->back()->with('error', $section->getErrorMessage());
        }

        $section->onComplete();

        $nextSectionSlug = $request->getUIQuiz()->getNextSectionSlug($slug);

        return redirect()
            ->route('front.quiz.section', [
                'quiz' => $quiz->id,
                'slug' => $nextSectionSlug
            ]);
    }

    /**
     * Renders the completed quiz page
     * This page will show the user if she has verified its emails
     * and her referral link
     */
    public function complete()
    {
        return view('front/quiz/complete');
    }
}







