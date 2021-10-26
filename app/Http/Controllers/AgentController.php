<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        // try {
            $agents = User::where('role', 'agents')->get();
            return view('agents.create', ['agents' => $agents]);
        // } catch (\Exception $exception) {
        //     toastr()->error('Something went wrong, try again');
        //     return back();
        // }
    }
}
