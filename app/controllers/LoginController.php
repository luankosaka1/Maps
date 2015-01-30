<?php

class LoginController extends BaseController
{
	public function login()
	{
        if (Auth::check()) {
            return Redirect::to('map');
        } else if (Request::isMethod('post')) {
            if (Auth::attempt( $this->getCredentials() )) {
                return Redirect::to('map');
            } else {
                return Redirect::to('login')->with('error', 'Username ou senha incorreto!');
            }
        }

        return View::make('layout/login');
	}

	public function logout()
	{
		Auth::logout();
        return Redirect::to('login');
	}

    private function getCredentials() {
        return [
            'username' => Input::get('username'), 
            'password' => Input::get('password'),
        ];
    }
}