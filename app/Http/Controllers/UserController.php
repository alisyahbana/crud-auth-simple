<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateOrEditUserRequest;
use App\Http\Requests\EditUserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	$data['user'] = Auth::user();
    	return view('user', $data);
    }


    public function create()
    {
    	return view('create');
    }

    public function edit()
    {
    	$data['user'] = Auth::user();
    	return view('edit', $data);
    }

    public function update(EditUserRequest $request)
    {
    	$user = Auth::user();
        
        $user->update($request->all());

        $message = 'Profile Updated';

        return redirect('/user')->withMessage($message);

    }

    public function store(CreateOrEditUserRequest $request)
    {

    	$request->merge(['password' => Hash::make($request->password)]);
        
        $user = User::create($request->all());

        $message = 'User Added';

        return redirect('/')->withMessage($message);
    }
}
