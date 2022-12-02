<?php

namespace App\Http\Controllers;

use App\Models\todoo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class TodooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('page.home', [
            'nav' => 'Home'
        ]);
    }

    public function login()
    {
        return view('page.login');
    }

    public function register()
    {
        return view('page.register');
    }

    public function todolist()
    {
        $todoo = todoo::where('user_id', '=', Auth::user()->id)->get();

        return view(
            'page.todolist',
            [
                'nav' => 'Todo List'
            ],
            compact('todoo')
        );
    }

    public function maketodo()
    {
        return view('page.maketodo', [
            'nav' => 'New Todo List'
        ]);
    }

    public function updateComplated($id)
    {
        todoo::where('id', '=', $id)->update([
            'status' => 1,
            'done_time' => \Carbon\Carbon::now(),
        ]);
        return redirect('/todolist')->with('Complated', 'beuoivwbeWVOBoi');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }



    public function registerAccount(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|',
            'username' => 'required|min:4|max:10',
            'password' => 'required|min:4'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('registerSuccess', 'jegiubgiueqbubwrubvoq');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [
            'username.exists' => 'username ini belum tersedia',
            'username.required' => 'username ini harus di isi',
            'password.required' => 'password harus di isi',
        ]);
        $user = $request->only('username', 'password');
        if (Auth::attempt($user)) {
            return redirect('/home')->with('successLogin', 'xxx');
        } else {
            return redirect('/login')->with('error', 'xxx');
        }
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
        // dd($request->all());
        $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description' => 'required|min:5'
        ]);

        todoo::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/todolist')->with('successAdd', 'hwvihwr');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todoo  $todoo
     * @return \Illuminate\Http\Response
     */
    public function show(todoo $todoo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todoo  $todoo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todoo = todoo::where('id', $id)->first();
        return view('page.edit', ['nav' => 'TodoList'], compact('todoo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todoo  $todoo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description' => 'required|min:5'
        ]);

        todoo::where('id', $id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/todolist')->with('successUpdate', 'hnvwwvihwr');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todoo  $todoo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todoo $todoo, $id)
    {
        todoo::where('id', '=', $id)->delete();
        return redirect('/todolist')->with('successDelete', 'ugwihwevihpewvih');
    }
}
