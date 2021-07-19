<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class ScholarApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.ScholarRegister');
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
        $this->validate($request, [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'contactno' => 'required|numeric|min:11',
            'facebook'  => 'required|url',
            'image'     => 'required|mimes:jpeg,png,jpg|max:5048',
            'password'  => 'required|string|min:8|confirmed',
       ]);


       $file = $request->file('image');
       $extension = $file->extension();
       $name = str_replace(' ', '', $request->name);
       $fileName = time() . '-' . $name . '.' . $extension;
       $file->move('images/', $fileName);
       Image::make(public_path('images/'. $fileName))->fit(400, 400)->save();
     
   
       
       $scholar = User::create([
            'name'          => $request['name'],
            'email'         => $request['email'],
            'contactno'     => $request['contactno'],
            'facebook'      => $request['facebook'],
            'photo'         => $fileName,
            'password'      => bcrypt($request['password']),
            'role'          => '0',
            'role'          => '0',

       ]);

       Auth::login($scholar);
       return redirect('login');
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
