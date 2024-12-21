@extends('layouts.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row ml-2 mr-2">
            <div class="col-sm-12">
                <h2 class="font-weight-bold">Admin Panel</h2>
                <hr>
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Gejala</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="card ml-4 mr-4">
    <div class="card-header">
        <div class="row">
            <div class="col-6 mt-2">
                <h2 class="card-title ml-2 font-weight-bold">
                    <i class="fas fa-clipboard-list pr-1"></i>
                    Data Gejala
                </h2>
            </div>
            <div class="col-6">
                <a href="{{ route('gejala.create')}}" class="btn btn-primary btn-sm modal-show float-right badge-pill mr-4 text-light">
                    <i class="fa fa-plus-circle"></i> Tambah Data Gejala
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class='table-responsive'>
                        <table id="datatable" class="table table-bordered table-hover" width="100%">
                            <thead class="thead-light">
                                    <tr>
                                    <th> No </th>
                                    <th style="width:30%"> Nama </th>
                                    <th style="width:50%"> Keterangan </th>
                                    <th style="width:14%"> Aksi </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('icon')
    class="fas fa-clipboard-list ml-1 mt-1 mr-2"
    @endsection

    @push('scripts')
    <script>

    $("#penyakitmenu").addClass("menu-open");
    $("#datapenyakit").addClass("active");
    $("#gejala").addClass("active");
    
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.gejala') }}",
            columns: [
                
                { data: 'DT_RowIndex', name: 'id'},
                { data: 'nama', name: 'nama', class:"text-justify"},
                { data: 'keterangan', name: 'keterangan', class:"text-justify"},
                { data: 'action', name: 'action',  orderable: false, searchable:false, class:"text-center"}
            ]
        });
    </script>
    @endpush