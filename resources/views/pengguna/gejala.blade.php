@extends('layouts2.master')

@section('content2')

<h2 class="text-center font-weight-bold"> Gejala dan Keterangan </h2>
<hr style="width: 20%;">
<br>
<div class="card-body">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-body">
                <div class='table-responsive'>
                    <table id="datatable" class="table table-bordered table-hover" width="100%" style="color:black">
                        <thead class="thead-light">
                            <tr>
                                <th> No </th>
                                <th style="width:40%"> Nama </th>
                                <th style="width:50%"> Keterangan </th>
                            </tr>
                        </thead>
                        @foreach($gejala as $g)
                        <tr style="">
                            <td>{{ $g->id}}</td>
                            <td>{{ $g->nama }}</td>
                            <td class="text-justify">{{ $g->keterangan }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

$("#gejala").addClass("active");


</script>
@endsection
