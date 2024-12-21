@extends('layouts2.master')

@section('content2')

<h2 class="text-center font-weight-bold"> Dokter Spesialis Paru</h2>

<hr style="width: 20%;">
<br>
<div class="row">
    @foreach($dokter as $d)
    <div class="col-sm-1"></div>
    <div class="col-sm-5  mb-3">
        <img src="{{$d->gambar}}" class="ml-5 mb-3" width="200px" height="200px" alt="">
        <h5 class=" font-weight-bold">{{$d->nama}}</h5>
            <p class="">{{$d->no_telepon}}</p>
            <p class="">{{$d->alamat}}</p>
            <p class="">{{$d->keterangan}}</p>
    </div>
    @endforeach

</div>

<br><br>



<script>
    $("#dokter").addClass("active");

</script>
@endsection
