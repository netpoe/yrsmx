<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserAdapter as User;
use App\Model\QuizAdapter as Quiz;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        if ($request->status == 'quiz-completed') {
            $users = (new User)->completed();
        }

        return view('admin/users/index', ['users' => $users]);
    }

    public function profile(User $user)
    {
        return view('admin/users/profile', ['user' => $user]);
    }
}