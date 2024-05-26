<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }


    public function auth(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if (!auth()->attempt($credentials)) {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }

        $projects = Project::get();
        // session()->put('user', $user->id);
        // session()->put('projects', $projects);


        return redirect()->route('home', compact('user', 'projects'));
        // return view('pages.index', compact('user', 'projects'));
    }
    public function logout()
    {
        $projects = Project::get();
        auth()->logout();
        return redirect()->route('home', compact('projects'));
    }

    public function destroy($id)
    {

        $res = Project::find($id)->delete();
        return redirect()->back()->with('status', 'Project deleted');
    }
}
