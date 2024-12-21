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
                    <li class="breadcrumb-item active">Pengetahuan</li>
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
                    <i class="fas fa-list pr-1"></i>
                    Data Pengetahuan
                </h2>
            </div>
            <div class="col-6">
                <a href="{{ route('pengetahuan.create')}}" class="btn btn-primary btn-sm modal-show float-right badge-pill mr-4 text-light">
                    <i class="fa fa-plus-circle"></i> Tambah Pengetahuan
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
                                    <th style="width:25%"> Nama Penyakit </th>
                                    <th style="width:30%"> Nama Gejala </th>
                                    <th> Nilai MB </th>
                                    <th> Nilai MD </th>
                                    <th> Nilai CF </th>
                                    <th style="width:150px"> Aksi </th>
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
    class="fas fa-list ml-1 mt-1 mr-2" style="margin-top: .45rem!important;"
    @endsection

    @push('scripts')
    <script>

    $("#penyakitmenu").addClass("menu-open");
    $("#datapenyakit").addClass("active");
    $("#pengetahuan").addClass("active");
    
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.pengetahuan') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'id'},
                { data: 'penyakit.nama', name: 'penyakit.nama'},
                { data: 'gejala.nama', name: 'gejala.nama'},
                { data: 'nilai_mb', name: 'nilai_mb'},
                { data: 'nilai_md', name: 'nilai_md'},
                { data: 'nilai_cf', name: 'nilai_cf'},
                { data: 'action', name: 'action',  orderable: false, searchable:false, class:"text-center"}
            ]
        });
    </script>
    @endpush