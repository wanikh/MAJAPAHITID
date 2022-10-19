<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function halamanprofileuser()
    {
        return view('profileuser');
    }


    public function viewhalamanprofileuser()
    {
        $data_profiles=profile::all();
        return view ('viewprofileuser', compact('data_profiles'));
    }

    public function viewhalamanprofileadmin()
    {
        $data_profiles=profile::all();
        return view ('viewprofileadmin', compact('data_profiles'));
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
    public function posthalamanprofileuser(Request $request)
    {
        $data_profiles = profile::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoprofile/', $request->file('foto')->getClientOriginalName());
            $data_profiles->foto = $request->file('foto')->getClientOriginalName();
            $data_profiles->save();
        }
        return redirect('profileuser')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showprint($id)
    {
        $data_profiles = profile::find($id);
        return view('showprofileadmin', compact('data_profiles'));
    }

    public function showprintpdf($id)
    {
        $data_profiles = profile::find($id);
        return view('showprofileadminpdf', compact('data_profiles'));
    }

    public function showprintuser($id)
    {
        $data_profiles = profile::find($id);
        return view('showprofileuser', compact('data_profiles'));
    }

    public function showprintuserpdf($id)
    {
        $data_profiles = profile::find($id);
        return view('showprofileuserpdf', compact('data_profiles'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_profiles = profile::find($id);
        return view('edithalamanprofileadmin', compact('data_profiles'));
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
        $data_profiles = profile::find($id);
        $data_profiles->update($request->all());
        return redirect()->route('viewprofileadmin')->with('update','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        profile::where('id',$id)->delete();
        return redirect ('viewhalamanprofileadmin');
    }
}
