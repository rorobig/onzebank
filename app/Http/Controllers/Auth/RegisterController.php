<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\verifyEmail;
use Session;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

        // Contain at least one uppercase/lowercase letters and one number
        // passowrd regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/  
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'iban'=> 'required|max:18',
        ]);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        Session::flash('status','Geregistreerd! maar verifieer uw email om uw account te activeren');
        $user= User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken' => Str::random(40),
            'iban' => $data['iban'],
            'tnumber' => $data['tnumber'],
        ]);
        $thisUser = User::findorFail($user->id);
        $this->sendEmail($thisUser);
        return $thisUser;
    }


public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect(route('login'));
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }


    public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    public function sendEmailDone($email,$verifyToken)
    {
            $user = User::where(['email'=> $email, 'verifyToken'=>$verifyToken])->first();
            
            if ($user){
                $user->status = 1;
                $user->verifyToken = null;
                $user->save();
            }else{
               return 'user not found';
            }

            return redirect()->route('home')->with('status', 'Thankyou for verifying your email');
    }


        public function sendEmail($thisUser)
    {

        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }
}
