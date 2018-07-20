<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        if(!empty($file)) {

            $name = $file->getClientOriginalName();

            $file->move('images', $name);

        }

        $User = User::create(
            [
                'name' => $request->input('name'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'is_active' => $request->input('is_active')
            ]
            );

        if(!empty($file)) {
        
            $User->photos()->create(
            [
                'file' => $name
            ]
            );
        }

     

        return redirect()->route('users.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = User::findOrFail($id);

        /*dd($User->photos);*/

        return view('admin.users.show', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('admin.users.edit', compact('User'));
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
        $User = User::findOrFail($id);

        $file = $request->file('file');

        if(!empty($file)) {

            $name = $file->getClientOriginalName();

            $file->move('images', $name);

        }

        $User->update(
            [
                'name' => $request->input('name'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'is_active' => $request->input('is_active')
            ]
            );

        if(!empty($file)) {

            if(empty($User->photos()->first())){
                $User->photos()->create(
                    [
                        'file' => $name
                    ]
                    );
            }

            else{
                $User->photos()->update(
                    [
                        'file' => $name
                    ]
                    );
            }
        }


        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::findOrFail($id);

        $User->delete();

        return redirect()->route('users.index');
    }
}
