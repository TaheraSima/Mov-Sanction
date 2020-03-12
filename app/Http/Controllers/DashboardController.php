<?php

namespace App\Http\Controllers;

use App\dashboard;
use App\CustomUser;
use App\Category;
use App\Product;
use App\User;
use App\Originator;
use App\GroupMov;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $categoryObj    = new Category();
        $categorylist   = $categoryObj->get();
        $productObj     = new Product();
        $productlist    = $productObj->get();
        $userObj        = new User();
        $userlist       = $userObj->get();
        $originatorObj  = new Originator();
        $originatorlist = $originatorObj->get();

        $movcreate   = GroupMov::where([
            ['sender_id', Auth::user()->email],
            ['status', 1],
        ])->orderBy('id', 'desc')->get();

        $movorder   = GroupMov::where('status', 1)->orderBy('id', 'desc')->get();
        foreach ($movorder as $mov) {
            if ($mov['extarnal_act'] != '') {
                $users = explode(',', $mov['extarnal_act']);
            }
        }
         $groupmov   = GroupMov::where('extarnal_act', $users)->orderBy('id', 'desc')->get();
         dd($groupmov);

        return view ('dashboard', compact('categorylist', 'productlist', 'movcreate', 'originatorlist'));
    }
    public function dash(Request $request)
    {
        $user_id = $request->user_id;
        $password = $request->password;
        $user_type = $request->location;

        $customUser = CustomUser::where([
            ['user_id', $user_id],
            ['password', $password],
            ['user_type', $user_type],
        ])->get();
        
        foreach ($customUser as $user) {
           $userId = $user->user_id;
        }

        if (isset($userId)) {
            return view ('dashboard');
        }
        else{
             return view ('login');
        }
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(dashboard $dashboard)
    {
        //
    }


    public function edit(dashboard $dashboard)
    {
        //
    }

    public function update(Request $request, dashboard $dashboard)
    {
        //
    }


    public function destroy(dashboard $dashboard)
    {
        //
    }
}
