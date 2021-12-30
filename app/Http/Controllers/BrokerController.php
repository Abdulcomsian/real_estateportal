<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brokers;
use Auth;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $brokers = Brokers::get();
            return view('brokers.brokers-view', compact('brokers'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('brokers.add_brokers');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
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
            'name' => ['required', 'string', 'max:35'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:brokers'],
        ]);
        try {
            $input = $request->except('_token');
            $input['user_id'] = Auth::user()->id;
            $res = Brokers::create($input);
            if ($res) {
                toastr()->success('Brokers Created Successfully!!');
                return redirect('/brokers');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $broker = Brokers::find($id);
            return view('brokers.brokers-detail', compact('broker'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $broker = Brokers::find($id);
            return view('brokers.edit_brokers', compact('broker'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:35'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:clients'],
        ]);
        try {
            $input = $request->except('_token', '_method');
            $input['user_id'] = Auth::user()->id;
            $res = Brokers::where('id', $id)->update($input);
            toastr()->success('Broker Updated Successfully!!');
            return redirect('/brokers');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $res = Brokers::find($id)->delete();
            toastr()->success('Brokers Deleted Successfully');
            return redirect('/brokers');
        } catch (\Exception $exception) {
            if ($exception->getCode() == 23000) {
                toastr()->error('Brokers cant be deleted. broker is associated to a lead ');
                return back();
            }
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
