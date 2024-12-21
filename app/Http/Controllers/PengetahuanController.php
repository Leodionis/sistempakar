<?php
namespace App\Http\Controllers;
use App\Pengetahuan;
use App\Gejala;
use App\Penyakit;
use Yajra\DataTables\Datatables;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Pengetahuan::with('gejala','penyakit')->get();
        $gejala = Gejala::all();
        $penyakit = Penyakit::all(); 
        return view('pengetahuan.index',['model'=> $model, 'gejala'=> $gejala, 'penyakit'=> $penyakit]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pengetahuan();
        $gejala = Gejala::all();
        $penyakit = Penyakit::all(); 
        return view('pengetahuan.form', ['model'=> $model, 'gejala'=> $gejala, 'penyakit'=> $penyakit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'penyakit' => 'required',
            'gejala' => 'required',
            'nilai_mb' => 'required|numeric|between:0,1',
            'nilai_md' => 'required|numeric|between:0,1',
        ]);

        $check = Pengetahuan::where([
            'id_penyakit' => $request['penyakit'],
            'id_gejala' => $request['gejala'],
        ])->first();

        if ($check !== null) {
            return \Response::json(array("errors" => ['penyakit' => 'The Penyakit and Gejala has already been taken.
            ', 'gejala' => 'The Penyakit and Gejala has already been taken.']), 422);
        }

        $model = [
            'id_penyakit' => $request['penyakit'],
            'id_gejala' => $request['gejala'],
            'nilai_mb' => $request['nilai_mb'],
            'nilai_md' => $request['nilai_md'],
        ];

        $nilai_cf = $model['nilai_mb'] - $model['nilai_md'];
        $model['nilai_cf'] = $nilai_cf;

        return Pengetahuan::create($model);
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
        $model = Pengetahuan::findOrFail($id);
        $gejala = Gejala::all();
        $penyakit = Penyakit::all(); 
        return view('pengetahuan.form', ['model'=> $model, 'gejala'=> $gejala, 'penyakit'=> $penyakit]);
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
            'penyakit' => 'required',
            'gejala' => 'required',
            'nilai_mb' => 'required|numeric|between:0,1',
            'nilai_md' => 'required|numeric|between:0,1',
        ]);

 

        
        $model = Pengetahuan::find($id);
        $model-> id_penyakit = $request['penyakit'];
        $model-> id_gejala = $request['gejala'];
        $model-> nilai_mb = $request['nilai_mb'];
        $model-> nilai_md = $request['nilai_md'];
        $nilai_cf = $model['nilai_mb'] - $model['nilai_md'];
        $model['nilai_cf'] = $nilai_cf;
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
        $model = Pengetahuan::findOrFail($id);
        $model->delete();
    }
    public function dataTable()
    {
        $model = Pengetahuan::with('gejala','penyakit')->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.action', [
                    'model' => $model,
                    'url_edit' => route('pengetahuan.edit', $model->id),
                    'url_destroy' => route('pengetahuan.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }
}
