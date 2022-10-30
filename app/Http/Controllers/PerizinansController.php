<?php

namespace App\Http\Controllers;

use App\Models\perizinan;
use Illuminate\Http\Request;
use DB;

class PerizinansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function halamanperizinanuser()
    {
        return view('perizinanuser');
    }

    public function status($id)
    {
        $data_items = DB::table('perizinan')->where('id', $id)->first();
        $statusnow = $data_items->status;
        if ($statusnow == 1) {
            DB::table('perizinan')->where('id', $id)->update([
                'status' => 0
            ]);
        } else {
            DB::table('perizinan')->where('id', $id)->update([
                'status' => 1
            ]);
        }

        return redirect('viewhalamanperizinanuser');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewhalamanperizinan()
    {
        $data_items = perizinan::all();
        return view('viewperizinanadmin', compact('data_items'));
    }

    public function viewhalamanperizinanuser()
    {
        $data_items = perizinan::all();
        return view('viewperizinanuser', compact('data_items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function posthalamanperizinanuser(Request $request)
    {
        $data_items = perizinan::create($request->all());
        return redirect('perizinanuser')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showprint($id)
    {
        $data_items = perizinan::find($id);
        return view('showperizinanuser', compact('data_items'));
    }

    public function showprintpdf($id)
    {
        $data_items = perizinan::find($id);
        return view('showperizinanuserpdf', compact('data_items'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_items = perizinan::find($id);
        return view('edithalamanperizinanuser', compact('data_items'));
        // dd($data_items);
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
        $data_items = perizinan::find($id);
        $data_items->update($request->all());
        return redirect()->route('viewhalamanperizinan')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        perizinan::where('id', $id)->delete();
        return redirect('viewhalamanperizinanuser');
    }
}
