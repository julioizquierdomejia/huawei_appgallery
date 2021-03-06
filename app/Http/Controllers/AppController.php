<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Plan;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        /*$email = \Cookie::get('user');
        if ($email) {
            $logged = true;
        } else {
            $logged = false;
        }*/
        return view('home.index', [
            //'logged' => $logged
        ]);
    }

    public function terms_conditions()
    {
        return view('terms-conditions.index');
    }

    /*public function register()
    {
        return view('register');
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $planes = Plan::all();

        return view('admin.clientes.create', compact('planes'));
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
        $request->validate([
            'empresa' => 'required|min:3',
            'cargo' => 'required|min:3',
            'name' => 'required|min:3',
            'email' => 'required|email|max:255|unique:users',
        ]);

        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt('12345678');
        $user->save();

        
        $user_info = new InfoUser;
        $user_info->user_id = $user->id;
        $user_info->empresa = $request->get('empresa');
        $user_info->cargo = $request->get('cargo');
        $user_info->save();

        return redirect()->route('clientes.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
