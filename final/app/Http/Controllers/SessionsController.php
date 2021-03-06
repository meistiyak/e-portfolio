<?php 

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class SessionsController extends Controller
{
    /**
     * Create a new sessions controller instance.
     */

    protected $redirectAfterLogout = '/auth/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the login page.
     *
     * @return \Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Perform the login.
     *
     * @param  Request  $request
     * @return \Redirect
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if ($this->signIn($request)) {
            //flash('Welcome back!');

            //return redirect()->intended('/pages/profile');
            return redirect()->intended('/profile_page/index');
        }

       // flash('Could not sign you in.');

        return redirect()->back();
    }

    /**
     * Destroy the user's current session.
     *
     * @return \Redirect
     */
    public function logout()
    {
        Auth::logout();

        //flash('You have now been signed out. See ya.');
        //session(['success' => 'You have now been signed out. See ya.']);
        Session::put('success', 'You have now been signed out. See ya. ');
        //return redirect('auth/login');
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    /**
     * Attempt to sign in the user.
     *
     * @param  Request $request
     * @return boolean
     */
    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request), $request->has('remember'));
    }

    /**
     * Get the login credentials and requirements.
     *
     * @param  Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
            'verified' => true
        ];
    }
}
