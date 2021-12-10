<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB; 
use Carbon\Carbon; 
use Mail; 
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['q'] = $request->q;

        if (Auth::user()->level=='Admin') {
            $data['title'] = 'User Data';
            $data['rows'] = User::where('id_school', '=', Auth::user()->id_school)->get();
            return view('user.index', $data);
        }
        elseif (Auth::user()->level=='Student') {
            $data['title'] = 'Student Data';
            $data['rows'] = User::where('id_school', '=', Auth::user()->id_school)
                        ->where('level', '=', 'Student')
                        ->get();
            return view('user.index-student', $data);
        }
        elseif (Auth::user()->level=='Teacher') {
            $data['title'] = 'Teacher & Student Data';
            $data['rows'] = User::where('id_school', '=', Auth::user()->id_school)
                        ->where('level', '=', 'Teacher')
                        ->get();
            return view('user.index-teacher', $data);
        }
    }

    public function submitForgetPassword($email,$username,$school)
    {
        // $request->validate([
        //     'email' => 'required|email|exists:tb_user',
        // ]);
        // dd($email);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Mail::send('reset-email', ['token' => $token,'username' => $username,'email' => $email,'school' => $school], function($message) use($email){
            $message->to($email);
            $message->subject('Login Information');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:tb_user',
            'id_school' => 'required',
            'name' => 'required',
            'email' => 'required|unique:tb_user',
            'password' => 'required',
            'level' => 'required',
        ]);
        
        $user = new User();
        $user->username = $request->username;
        $user->id_school = $request->id_school;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();
        return redirect('user')->with('success', 'Insert data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data['title'] = 'Edit User';
        $data['row'] = $user;
        $data['levels'] = ['Student' => 'Student','Admin' => 'Admin', 'Teacher' => 'Teacher'];
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'id_school' => 'required',
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);
        
        $user->username = $request->username;
        $user->id_school = $request->id_school;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        if ($request->password)
            $user->password = Hash::make($request->password);

        $user->save();
        return redirect('user')->with('success', 'Edit data success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('user')->with('success', 'Delete data success');
    }
}
