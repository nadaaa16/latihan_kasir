<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('halaman-login');
    }

    public function auth(Request $request){
        // $request->validate([
        //     'nama' => 'required',
        //     'password' => 'required',
        // ], [
        //     // 'nama.exists' => 'nama ini belum tersedia',
        //     'nama' => 'nama harus diisi',
        //     'password' => 'nis harus diisi'
        // ]);

        return redirect('/dashboard');

        // $user = $request->only('nama','password');
        // if(Auth::attempt($user)){
        //     if(Auth::user()->role == 'siswa'){
        //         return redirect('/dashboard-siswa')->with('successLogin', 'Anda berhasil login!!!');
        //     } else if (Auth::user()->role == 'guru'){
        //         return redirect('/dashboard');
                
        //     }
        }
    

    public function logout(){
        Auth::logout();
        return redirect('/');
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
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
