<?php

namespace App\Http\Controllers;
use App\Admin;
use Yajra\DataTables\Datatables;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Admin();
        return view('admin.create', compact('model'));
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
            'nama' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'no_telepon' => 'required|max:15',
            'password' => 'required'
        ]);
        $model = [
            'nama' => $request['nama'],
            'no_telepon' => $request['no_telepon'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])

        ];
        
        return Admin::create($model);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $model = Admin::findOrFail($id);
        return view('admin.form', compact('model'));
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
            'nama' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$id,
            'no_telepon' => 'required|max:15|string',
        ]);

        $model = Admin::find($id);
        $model-> nama = $request['nama'];
        $model-> no_telepon = $request['no_telepon'];
        $model-> email = $request['email'];
        if ($request['password'] !== NULL) {
            $model->password = bcrypt($request['password']);
        } 
        // dd($model->password);
        $model-> update();

        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Admin::findOrFail($id);
        $model->delete();
    }
    public function dataTable()
    {
        $model = Admin::query();
        return DataTables::of($model)
        ->addColumn('action', function ($model) {
            return view('layouts.action', [
                'model' => $model,
                'url_edit' => route('admin.edit', $model->id),
                'url_destroy' => route('admin.destroy', $model->id)
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
}
