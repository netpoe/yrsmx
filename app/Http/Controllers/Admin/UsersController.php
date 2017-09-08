<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserAdapter as User;
use App\Model\QuizAdapter as Quiz;
use App\Model\ProductsAdapter as Product;
use App\Model\RelProductsOutfitAdapter as ProductsOutfit;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all()->filter(function($user){
            return !$user->isAdmin();
        });

        if ($request->status == 'quiz-completed') {
            $users = $users->filter(function($user){
                return $user->getLatestQuiz()->status() === Quiz::COMPLETE;
            });
        }

        return view('admin/users/index', ['users' => $users]);
    }

    public function profile(User $user)
    {
        return view('admin/users/profile', ['user' => $user]);
    }
}
