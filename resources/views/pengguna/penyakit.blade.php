@extends('layouts2.master')

@section('content2')

<h2 class="text-center font-weight-bold"> Informasi Penyakit Paru </h2>
<hr style="width: 20%;">
<br>
<div class="row">
    @foreach($penyakit as $p)
    {{-- <div class="col-sm-6 text-center mb-3">
        <img src="/assets/img/dokter6.png" width="200px" height="200px" alt="">
    </div>
    <div class="col-sm-6 text-center mb-3">
        <img src="/assets/img/dokter4.png" width="200px" height="200px" alt="">
    </div> --}}
    <div class="col-sm-4 text-center mb-3">
        <img src="{{$p->gambar}}"  width="250px" height="250px" alt="">
    </div>
    <div class="col-sm-8  mb-5 text-justify">
        <h5 class=" font-weight-bold"> {{$p->nama}} </h5>
        <p class="mb-3"> {{$p->keterangan}} </p>
        <h5 class=" font-weight-bold"> Penanganan </h5>
        <p class=""> {{$p->penanganan}} </p>
        <br><br>
        <hr>

    </div>
    @endforeach
</div>

<script>

$("#penyakit").addClass("active");


</script>
@endsection
