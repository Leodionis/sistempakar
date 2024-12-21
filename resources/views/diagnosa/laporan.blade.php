<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ public_path('assets/img/paru3.png') }}">
    <title>Liceria</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link href="../../assets/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css"> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <!-- Theme style -->

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ public_path('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.min.css">

    <link rel="stylesheet" href="../../assets/css/adminlte.css">

</head>

<body>
    
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>
    <div class="container-fluid pl-4 pr-4">
        <div class="row">
            <div class="col-sm-12">
                {{-- <div class="card card-primary card-outline">
                    <div class="card-header border-0">

                    </div> --}}
                   
                    <div class="card-body">
                        <div class="text-center">
                            {{-- <img src="{{ public_path('assets/img/paru4.png') }}" class=""  width="40px" height="40px"  alt=""> --}}
                            <img src="{{ public_path('assets/img/logo4.png') }}" class=""  width="150px" height="20px"  alt="">
                        </div>
                        <hr>
                        <h4 class="text-center">
                             Hasil Diagnosis
                        </h4>
                        <h6 class="text-center mb-4" style="color: grey;"> Mendiagnosis Penyakit Berdasarkan Gejala yang
                            Dialami</h6>
                        <br>


                        <div class="box box-success">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <div class='table-responsive'>
                                            <table class='table table-striped table-bordered cetak'>
                                                <thead>
                                                    <tr>
                                                        <th width="40">No</th>
                                                        <th>Gejala yang Dipilih</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach($data['gejala'] as $row)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $row }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <!-- <h3 class="page-title cetak">Hasil Penilaian</h3> -->
                                        <div class='table-responsive'>
                                            <table class='table table-bordered table-striped cetak'>
                                                <thead>
                                                    <tr>
                                                        <th width="40">No</th>
                                                        <th>Diagnosis</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach($data['diagnosis'] as $row)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $row }}</td>
                                                        <td>{{$data['nilai'][$no-2]  }}%</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <h3> Hasil Diagnosis</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class='table-responsive'>
                                        <table class='table table-bordered cetak'>
                                            <tbody>
                                                <tr>
                                                    <td width="130">Penyakit</td>
                                                    <td><strong>{{ $data['diagnosis'][0] }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Penanganan</td>
                                                    <td class="text-justify">
                                                        {{ $data['Penanganan'] }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../..//assets/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/js/demo.js"></script>

    <script src="{{ asset('assets1/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('assets1/js/app.js') }}"></script>

    <script>
        $(function () {
            $('#diagnosa').addClass('active');
        });
    </script>

</body>

</html>