<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form\AuthLoginForm;

class AdminAuthController extends Controller
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
