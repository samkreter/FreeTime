<?php

class UserController extends BaseController
{

    public function getRegister()
    {
        return View::make('users.register');
    }

    /**
     * Method for saving a user.  Check the POST data against the rules
     * and then use Laravel's built in validator to validate the data.  If
     * the data is valid, create the user and flash a success message.
     * Otherwise return the errors.
     */
    public function postRegister()
    {
        $input = Input::all();
        $rules = array(
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'username'      => 'required|unique:users',
            'password'      => 'required|min:8'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $user = new User($input);
            $user->password = Hash::make($input['password']);
            if ($user->save()) {
                Auth::loginUsingId($user->id);
                return Redirect::to('home')->with('success', 'Account created!');
            }
        }
        $messages = $validator->messages();
        return Redirect::to('login')->withErrors($messages)
          ->withInput(Input::except('password'));
    }

    public function getLogin()
    {
        return View::make('users.login');
    }

    /**
     * Try to log the user in with the post data provided.  If the authentication fails
     * return the user to the login page with the errors.  Otherwise return them to where
     * they were originally trying to go or the dashboard.
     * @return mixed
     */
    public function postLogin()
    {
        if (Auth::attempt(array(
            'username' => Input::get('username'),
            'password' => Input::get('password')))) {
            return Redirect::intended('home');
        }
        return Redirect::to('login')->with('login', "Invalid username/password combination!");
    }

    /**
     * If a user is logged in, log them out and redirect them to the index page.
     */
    public function getLogout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::to('/');
    }
}
