<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form\AuthLoginForm;

class AuthController extends Controller
{
    public function ingresa()
    {
        $form = new AuthLoginForm;

        $form->setFields();

        return view('admin/auth/login', compact('form'));
    }

    public function login()
    {

    }
}
