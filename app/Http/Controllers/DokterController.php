<?php

namespace App\Http\Controllers;
use App\Dokter;
use Yajra\DataTables\Datatables;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dokter.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Dokter();
        return view('dokter.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all();

        $this->validate($request, [
            'nama' => 'required|min:3|string',
            'alamat' => 'required',
            'no_telepon' => 'required|max:15|string',
            'keterangan' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png',

        ]);
        
        if ($request->hasFile('gambar')){
            $model['gambar'] = '/upload/gambar/dokter/'.rand().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('upload/gambar/dokter/'), $model['gambar']);
        } 
        
        

        // $model = [
        //     'nama' => $request['nama'],
        //     'alamat' => $request['alamat'],
        //     'no_telepon' => $request['no_telepon'],
        //     'keterangan' => $request['keterangan'],
        // ];
        
        // return Dokter::create($model);
        $model = Dokter::create($model);
        return $model;
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
        $model = Dokter::findOrFail  ($id);
        return view('dokter.form', compact('model'));
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
        $this->validate($request, [
            'nama' => 'required|min:3|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|max:15|string',
            'keterangan' => 'required|string',
            'gambar' => 'mimes:jpeg,jpg,png',
        ]);
        
        $dokter = Dokter::findOrFail($id);
        $input = $request->all();
        
    // Jika pengguna mengirimkan file gambar baru
        if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
            if ($dokter->gambar && file_exists(public_path($dokter->gambar))) {
                unlink(public_path($dokter->gambar));
            }
            
        // Simpan gambar baru
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('upload/gambar/dokter/'), $namaGambar);
            
        // Update kolom gambar dengan nama gambar baru
            $input['gambar'] = '/upload/gambar/dokter/' . $namaGambar;
        }
        
        $dokter->update($input);
        
        return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Dokter::findOrFail($id);
        if (!$model->gambar == NULL){
            unlink(public_path($model->gambar));
        }
        $model->delete();
    }
    public function dataTable()
    {
        $model = Dokter::query();
        return DataTables::of($model)

        ->addColumn('show_gambar', function($model){
            if ($model->gambar == NULL){
                return 'No Image';
            }
            return '<img src="'. url($model->gambar) .'" class="rounded-square" width="60" height="60"  alt="">';
        })
        ->addColumn('action', function ($model) {
            return view('layouts.action', [
                'model' => $model,
                'url_edit' => route('dokter.edit', $model->id),
                'url_destroy' => route('dokter.destroy', $model->id)
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action','show_gambar'])
        ->make(true);
    }
}
