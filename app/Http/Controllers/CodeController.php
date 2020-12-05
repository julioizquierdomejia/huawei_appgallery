<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use App\Models\User;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function register()
    {
        $correo = \Cookie::get('email');
        $user = User::where('email', '=', $correo)->first();

        if($user)
            return redirect('vervideo')->with('user');
        else
        return redirect('register');
    }

    public function store(Request $request)
    {
        $rules = array(
            'code' => 'required|min:5',
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'dni' => 'required|digits:8',
            'phone' => 'required|min:6',
            'email' => 'required|email|max:255|unique:users',
        );
        $messages = array(
            'required' => 'El :attribute es requerido.',
            'email' => 'El :attribute debe ser una dirección de correo válida.',
            'email.unique' => 'El email ya fue registrado.'
        );
        $validator = \Validator::make($request->all(), $rules, $messages);

        $code = $request->get('code');
        $name = $request->get('name');
        $last_name = $request->get('lastname');
        $phone = $request->get('phone');
        $dni = $request->get('dni');
        $email = $request->get('email');

        $user_by_code = User::where('code', $code)->exists();
        if ($user_by_code === false) {
            $code_by_code = Code::where('code', $code)->exists();
            if ($code_by_code) {
                $user = new User();
                $user->code = $code;
                $user->name = $name;
                $user->last_name = $last_name;
                $user->celular = $phone;
                $user->dni = $dni;
                $user->password = 12345678;
                $user->email = $email;
                $user->save();

                \Cookie::queue('email', $user->email, 100);

                return redirect('vervideo');
            } else {
                //Codigo invalido
                $validator->getMessageBag()->add('code', 'El código no existe.');
                return redirect()->back()->withErrors($validator);
            }
        }
        //existe code con otro usuario
        $validator->getMessageBag()->add('code', 'El código ya fue usado.'); 

        return redirect()->back()->withErrors($validator);
    }

    public function vervideo(Request $request)
    {
        //
        $correo = \Cookie::get('email');
        $user = User::where('email', '=', $correo)->first();

        if($user)
            return view('opcion', compact('user'));
        else
            return view('register');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
}
