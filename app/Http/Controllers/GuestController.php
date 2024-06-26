<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class GuestController extends Controller
{
    //    login logout register
    public function login()
    {
//        lay url chuyen huong sang login
        session([
            'myUrl' => url()->previous()
        ]);
        return view('guest.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        //check account status
        //0 = locked
        //1 = active
        $guestEmail = $credentials['email'];
        $guestAccount = Guest::where('email', '=', $guestEmail)->first();
        if ($guestAccount == null) {
            return Redirect::back()->with('failed', 'Email does not exist!');
        }
        $accountStatus = $guestAccount->status;
        if ($accountStatus == 0) {
            return to_route('guest.login')->with('failed', 'This account has been locked!')->withInput($request->input());
        }
        //check account trong db
        if (Auth::guard('guest')->attempt($credentials)) {
            $request->session()->regenerate();
            //Lấy thông tin của guest đang login
            $guest = Auth::guard('guest')->user();
            //Cho login
            Auth::guard('guest')->login($guest);
            //Ném thông tin user đăng nhập lên session
            session(['guest' => $guest]);

//            lay thong tin url truoc do de chuyen guest ve
            $url = Str::replace(url('/'), '', session('myUrl'));

            //tu register sang
            if (Str::contains($url, 'signup')) {
                return to_route('guest.home')->with('success', 'Sign in successfully!');
            } //tu rooms/id sang
            else if (Str::contains($url, 'rooms/')) {
                $roomId = Str::replace('/rooms/', '', $url);
                return to_route('guest.rooms.show', $roomId)->with('success', 'Sign in successfully!');
            }
            return to_route('guest.profile')->with('success', 'Sign in successfully!');
        }
        return to_route('guest.login')->with('failed', 'Wrong email or password!')->withInput($request->input());
    }

    public function logout(Request $request)
    {
        if (!Auth::guard('guest')->check()) {
            return Redirect::route('guest.home')->with('success', 'You have already been logged out!');
        }
        Auth::guard('guest')->logout();
        session()->forget('guest');
        return view('guest.logout');
    }

    public function register()
    {
        return view('guest.signup');
    }

    public function registerProcess(StoreGuestRequest $request)
    {
        $validated = $request->validated();

        if ($validated) {
            $data = [];
            $data = Arr::add($data, 'first_name', $request->first_name);
            $data = Arr::add($data, 'last_name', $request->last_name);
            $data = Arr::add($data, 'email', $request->email);
            $data = Arr::add($data, 'password', Hash::make($request->password));
            $data = Arr::add($data, 'phone_number', $request->phone);
            $data = Arr::add($data, 'status', 1);
            Guest::create($data);

            return to_route('guest.login')->with('success', 'Account created successfully!');
        } else {
            return to_route('guest.register')->with('failed', 'Something went wrong!');
        }
    }
    //    login logout register
}
