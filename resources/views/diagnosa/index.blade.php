@extends('layouts2.master')

@section('content2')

<div class="content-header">
    <div class="container-fluid">
     
    </div>
</div> 

<div class="container-fluid pl-4 pr-4">
    @error('gejala')
    <div class="alert alert-danger" style="background-color: #ea2538; color: white; border-color:red;" role="alert">
     <b>Silahkan pilih gejala terlebih dahulu!</b>
 </div>
 @enderror
 <div class="row" style="color:black">
    <div class="col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-header border-0">
                
            </div>
            <div class="card-body">
                <h4 class="text-center">
                    <i class="fas fa-clipboard-list"> </i>
                    Halaman Diagnosis
                </h4>
                <h6 class="text-center mb-4" style="color: grey;"> Mendiagnosis Penyakit Berdasarkan Gejala yang Dialami</h6>
                <!-- <hr> -->
                {!! Form::open(array('route' => 'diagnosa.store','method'=>'POST')) !!}
                <table class="table">
                    <thead class="">
                        <tr>
                            <th width="30"></th>
                            <th>
                                <h5 class="mt-3">Silahkan Pilih Gejala yang Dirasakan :</h5>
                                <p>Tips Memilih Gejala:<br>
                                    1. Pilihlah Gejala berdasarkan Gejala yang paling sering atau paling terasa pada
                                    diri Anda. <br>
                                    2. Pilihlah minimal 3 (Tiga) Gejala untuk mendapatkan hasil yang lebih akurat.
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody align="left">
                        @foreach($data as $row)
                        <tr>
                            <td></td>
                            <td>
                                <label class="checkbox-container">
                                    {{$row->keterangan}}
                                    <input type="checkbox" name="gejala[]" class="flat" value="{{$row->id}}">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="box-footer">
                    <div class="text-center col-sm-12">
                        <button type="submit" class="btn btn-primary">Proses</button>
                        <a class="btn btn-danger" href="{{url('/pasien')}}"> Batal</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .checkbox-container {
        display: flex;
        align-items: center;
    }
    
    .checkbox-container input {
        display: none;
    }
    
    .checkmark {
        border: 1px solid #ccc;
        border-radius: 50%;
        height: 20px;
        width: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-left: auto;
        position: relative;
    }
    
    .checkmark::before {
        content: "";
        display: none;
        width: 6px;
        height: 6px;
        background: red;
        border-radius: 50%;
        position: absolute;
    }
    
    .checkbox-container input:checked + .checkmark::before {
        display: block;
        top: 7px;
        left: 7px;
    }
</style>

<script>
   $(function () {
    $('#diagnosa').addClass('active');
});
</script>

@endsection
