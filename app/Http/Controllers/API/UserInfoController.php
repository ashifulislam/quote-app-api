<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\User\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_name($name)
    {

        //getting the first and last name
        $first_name = UserInfo::select('first_name')->get();
        $last_name =  UserInfo::select('last_name')->get();

        //concatenate the first and last name
        $name = $first_name . ' ' . $last_name;
 
        //searching names
        $user_data = DB::table('user_infos')
        ->where('email', 'like', '%' . $name. '%')
        ->orWhere('uuid', 'like', '%' . $name. '%')
        ->orWhere('first_name', 'like', '%' .$name. '%')
        ->orWhere('last_name', 'like', '%' .$name. '%')
        ->orWhere($name, 'like', '%' .$name. '%')
        ->get();

        //return result data
        return response()->json($user_data);

    }
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show(UserInfo $userInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserInfo $userInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserInfo $userInfo)
    {
        //
    }
}
