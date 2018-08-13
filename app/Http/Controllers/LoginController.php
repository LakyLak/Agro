<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\CheckPassword;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        Log::info("LOGIN\n");
        if ($request->isMethod('post')) {
            $data = $request->input();

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                Log::info('success');
                return redirect('/');
            } else {
                Log::info('failure');
                return redirect('/login')->with('flash_error_message', 'Invalid Email or Password');
            }
        }

        return view('login');
    }

    public function register(Request $request)
    {
        Log::info("enters register");

        if ($request->isMethod('post')) {
            $data = $request->all();

            Log::info("enters post before validation");

            $rules = [
                'new_pwd' => 'required|min:4',
                'confirm_pwd' => 'required|min:4|same:new_pwd',
            ];

            $validator = Validator::make($data, $rules, $messages = [])
                ->setAttributeNames([
                    'new_pwd' => 'Password',
                    'confirm_pwd' => 'Confirm Password'
                ]);

            if ($validator->fails()) {
                Log::info("validator failed");
                return back()->withInput()->withErrors($validator->messages());
            } else {
                Log::info('success');


                $user = new User;

                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['new_pwd']);

                $user->save();

                Auth::login($user);
                return redirect('/')->with('flash_success_message', 'User has been registered');
            }
        }

        return view('register');
    }

    public function logout()
    {
        Log::info("LOGOUT\n");
        Auth::logout();
        Session::flush();
        return redirect('/login')->with('flash_success_message', 'You were log out');
    }

    public function dashboard()
    {
        // $firstSolution = $this->firstSolution(0, 1000000000, 1);

        // echo '<pre>'; print_r($solution); die;


        return view('dashboard');
    }

    public function firstSolution($x, $y, $d)
    {
        $count = 0;
        for ($i = $x; $i < $y; $i += $d) {
            // $i += $d;
            // echo '<pre>'; print_r($i);
            $count++;
        }

        return $count;
    }

    public function secondSolution($x, $y, $d)
    {
        $count = 0;
        for ($i = $x; $i < $y; $i += $d) {
            // $i += $d;
            // echo '<pre>'; print_r($i);
            $count++;
        }

        return $count;
    }
}
