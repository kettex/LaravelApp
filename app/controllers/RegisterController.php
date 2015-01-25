<?php

class RegisterController extends BaseController
{


    public function __construct()
    {
        /**
         * Always run csrf protection before the request when posting
         */
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * showing the register form for new users
     */
    public function showRegisterForm()
    {
        $user = new User();

        // fill register form with values of empty user
        return View::make('user/register', compact('user'));
    }

    /**
     * register the new user and send mail notification
     */
    public function registerUser()
    {

        $user = new User();

        /**
         * create the validator for user model
         */
        $validator = User::validateRegisterModel(Input::all());

        try {
            /**
             * validate the input
             */
            if ($validator->passes()) {
                /**
                 * fill the user with values of the form
                 */
                $user->fill(Input::except('password_confirmation'));
                $user->password = Hash::make($user->password);
                $user->isActive = false;
                $user->isAdmin = false;
                $email = $user->email;
                $regId = GUID::generate();
                $user->registrationId = $regId;
                /**
                 * save the user to database
                 */
                $user->save();

                /**
                 * send mail for activation
                 */
                Mail::send('emails.auth.activate', array('msg' => 'Please click the following link to activate your user account!', 'link' => 'http://unikluwebtech.azurewebsites.net/activateAccount?registrationId=' . $regId), function ($message) use ($email) {
                    $message->to($email)->subject('Activate account');
                });
            } else {
                return Redirect::to('register')->withErrors($validator->getMessages());
            }
        } catch (Exception $e) {
            return Redirect::to('error');
        }

        return Redirect::to('login');
    }

    /**
     * method which is called, when user clicks the link in the e-mail for activating his account
     */
    public function setUserActive()
    {
        if (!isset($_GET["registrationId"])) {
            return Redirect::to('error');
        }

        // set the specified user 'active' in database
        $regId = $_GET["registrationId"];
        DB::table('users')->where('registrationId', $regId)->update(array('isActive' => 1));

        return Redirect::to('successfulRegistration');
    }
}
