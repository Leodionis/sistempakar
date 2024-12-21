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
                    <li class="breadcrumb-item active">Dokter</li>
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
                    <i class="fas fa-user-md pr-1"></i>
                    Data Dokter
                </h2>
            </div>
            <div class="col-6">
                <a href="{{ route('dokter.create')}}" class="btn btn-primary btn-sm modal-show float-right badge-pill mr-4 text-light">
                    <i class="fa fa-user-plus"></i> Tambah Data Dokter
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
                                    <th> Nama </th>
                                    <th> Tempat Praktek </th>
                                    <th> No Telepon </th>
                                    <th> Keterangan </th>
                                    <th> Gambar </th>
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
    class="fas fa-user-md ml-1 mt-1 mr-2"
    @endsection

    @push('scripts')
    <script>

        $("#dokter").addClass("active");

        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.dokter') }}",
            columns: [
                
                { data: 'DT_RowIndex', name: 'id'},
                { data: 'nama', name: 'nama'},
                { data: 'alamat', name: 'alamat'},
                { data: 'no_telepon', name: 'no_telepon'},
                { data: 'keterangan', name: 'keterangan'},
                {data: 'show_gambar', name: 'show_gambar', class:"text-center"},
                { data: 'action', name: 'action',  orderable: false, searchable:false, class:"text-center"}
                ]
        });
    </script>
    @endpush