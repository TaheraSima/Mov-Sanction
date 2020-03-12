<?php

namespace App\Http\Controllers;

use App\Originator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OriginatorController extends Controller
{
    public function index()
    {
        // $originator = Originator::findorfail($id);
        $originatorcreate    = Originator::orderBy('id', 'desc')->get();
        return view ('originatorcreate', compact('originatorcreate'));
    }
    public function originatorInfo()
    {
        return view ('originatorinfo');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $originator = new Originator;

        $originator->reference_no = $request->reference_no;
        $originator->ba_no = $request->ba_no;
        $originator->email = $request->email;
        $originator->approval_type = $request->approval_type;
        $originator->address = $request->address;
        $originator->telephone = $request->telephone;
        $originator->extension = $request->extension;
        $originator->name = $request->name;

        $signature=$request->file('signature');
        $new_name=rand() . '.' . $signature->getClientOriginalExtension();
        $signature_url='images/'.$new_name;
        $signature->move(public_path("images/"),$new_name);

        $originator->signature = $signature_url;

        $originator->rank = $request->rank;
        $originator->on_behalf = $request->on_behalf;
        $originator->display_name = $request->display_name;
        $originator->user_type = $request->user_type;
        $originator->status = $request->status;

        $originator->save();

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->name);
        $users->save();

        return redirect()->route('originatorcreate');
        
    }
    public function show(Originator $originator)
    {
        //
    }

    public function edit($id)
    {
        $originatorcreate    = Originator::orderBy('id', 'desc')->get();
        $originator = Originator::findorfail($id);
        return view ('originatorcreate', compact('originator', 'originatorcreate'));
    }

    public function update(Request $request, $id)
    {
        $originator = Originator::find($request->id);

        $originator->reference_no = $request->reference_no;
        $originator->ba_no = $request->ba_no;
        $originator->email = $request->email;
        $originator->approval_type = $request->approval_type;
        $originator->address = $request->address;
        $originator->telephone = $request->telephone;
        $originator->extension = $request->extension;
        $originator->name = $request->name;

        if ($request->file('signature')) {

            $signature=$request->file('signature');
            $new_name=rand() . '.' . $signature->getClientOriginalExtension();
            $signature_url='images/'.$new_name;
            $signature->move(public_path("images/"),$new_name);
            $originator->signature = $signature_url;
        }
        else{
            $pre_signature = $originator->signature;
            $originator->signature = $pre_signature;
        }

        $originator->rank = $request->rank;
        $originator->on_behalf = $request->on_behalf;
        $originator->display_name = $request->display_name;
        $originator->user_type = $request->user_type;
        $originator->status = $request->status;

        $originator->save();

        return redirect()->route('originatorcreate');
    }

    public function destroy(Originator $originator)
    {
        //
    }
}
