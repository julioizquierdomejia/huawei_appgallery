<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            return view('register');
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
            'confirm_terms' => 'required|boolean:in:1',
        );
        $messages = array(
            'required' => 'El :attribute es requerido.',
            'email' => 'El :attribute debe ser una dirección de correo válida.',
            'email.unique' => 'El email ya fue registrado.',
            'confirm_terms.required' => 'Aceptar términos y condiciones es requerido.',
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
                $user->password = Hash::make(12345678);
                $user->email = $email;
                $user->save();

                \Auth::login($user);

                //\Cookie::queue('email', $user->email, 100);

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
        return view('videos.list', [
            //'user' => $cookie_user
        ]);
    }

    public function video(Request $request, $slug)
    {
        $array = array('cocina-peruana', 'fullbody');
        if (in_array($slug, $array) == false) {
            return redirect('/');
        }
        //$video = Video::where('id', $id)->firstOrFail();
        return view('videos.show', [
            'video' => $slug
        ]);
    }

    public function login(Request $request)
    {
        $rules = array(
            'email' => 'required|email|max:255|exists:users',
        );
        $messages = array(
            'required' => 'El :attribute es requerido.',
            'email' => 'El :attribute debe ser una dirección de correo válida.',
        );
        $validator = \Validator::make($request->all(), $rules, $messages);

        $email = $request->get('email');

        $user = User::where('email', '=', $email)->first();

        if($user) {
            //\Cookie::queue('email', $email, 100);
            \Auth::login($user);

            return redirect('vervideo')->with('user');
        } else {
            return redirect('/');
        }
    }

    public function opcion(Request $request)
    {
        return view('opcion');
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
