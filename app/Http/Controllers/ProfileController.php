<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
//        $id=Auth::id();
//        if ($user->profile==null)
//        {
//            $profile=Profile::create([
//                'province'=>'pro',
//                'gender'=>'male',
//                'bio'=>'bio',
//                'user_id'=>$id,
//]);
//        }

        return view('users.profile',compact('user'));
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
//        $photos=$request->file('personal_picture');
//        $file = $photos->getClientOriginalExtension();
//        $file_name=time().$file;
//        $path='images/offers';
//        $request->personal_picture->move($path,$file_name);

        DB::table('profile')->insert([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'city'=>$request->city,
                'personal_picture'=>$request->personal_picture,
                'Bank_name'=>$request->Bank_name,
                'id_bank'=>$request->id_bank,
                'Map_location'=>$request->Map_location,
                'image_residence'=>$request->image_residence
            ]
);

        return response("تم الإضافة");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
