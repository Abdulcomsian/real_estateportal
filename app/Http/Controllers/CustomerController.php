<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Clients;
use Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        try {
            $clients = Clients::get();
            return view('customers.client-view', compact('clients'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function create()
    {
        try {
            return view('customers.add_clients');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function store(Request $request)
    {
        try {
            $input = $request->except('_token', 'image');
            $input['user_id'] = Auth::user()->id;
            if ($file = $request->file('image')) {
                $path = 'client-images/';
                if (!file_exists(public_path() . '/' . $path)) {
                    $path = 'client-images/';
                    File::makeDirectory(public_path() . '/' . $path, 0777, true);
                }
                $name = time() . $file->getClientOriginalName();
                $file->move('client-images/', $name);
                $input['file'] = $name;
            }

            $res = Clients::create($input);
            if ($res) {
                toastr()->success('Client Created Successfully!!');
                return redirect('/customer');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function show($id)
    {
        try {
            $client = Clients::find($id);
            return view('customers.clients-detail', compact('client'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function edit($id)
    {
        try {
            $client = Clients::find($id);
            return view('customers.edit_clients', compact('client'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $input = $request->except('_token', 'image', '_method');
            $input['user_id'] = Auth::user()->id;
            if ($file = $request->file('image')) {
                $path = 'client-images/';
                if (!file_exists(public_path() . '/' . $path)) {
                    $path = 'client-images/';
                    File::makeDirectory(public_path() . '/' . $path, 0777, true);
                }
                $client = Clients::find($id);
                if ($client->file) //if already resume unlink resume and upload new one
                {
                    unlink(public_path() . '/client-images/' . $client->file);
                }
                $name = time() . $file->getClientOriginalName();
                $file->move('client-images/', $name);
                $input['file'] = $name;
            }

            $res = Clients::where('id', $id)->update($input);
            if ($res) {
                toastr()->success('Client Updated Successfully!!');
                return redirect('/customer');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function destroy($id)
    {
        try {
            $res = Clients::find($id)->delete();
            toastr()->success('Client Deleted Successfully');
            return redirect('/customer');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
