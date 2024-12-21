@extends('layouts2.master')

@section('content2')
<div class="content-header">
    <div class="container-fluid">
        <!-- <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark ml-2">Percobaan Diagnosa</h1> -->
        <!-- </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right mr-2">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Diagnosa</li>
                </ol>
            </div>
        </div> -->
    </div>
</div>

<div class="container-fluid pl-4 pr-4">
    <div class="row" style="color:black">
        <div class="col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header border-0">

                </div>
                <div class="card-body">
                    <h4 class="text-center">
                        <i class="fas fa-clipboard-list"> </i>
                        Halaman Hasil Diagnosis
                    </h4>
                    <h6 class="text-center mb-4" style="color: grey;"> Mendiagnosis Penyakit Berdasarkan Gejala yang
                        Dialami</h6>
						<br>


                    <div class="box box-success">
                        {!! Form::open(array('route' => 'cetakPdf','method'=>'POST')) !!}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
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
                                                @foreach($nama_gejala as $row)
                                                {{ Form::hidden('gejala[]', $row['nama']) }}
                                               
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row['nama'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table><br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
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
                                                @foreach($hasil_akhir as $row)
                                                {{ Form::hidden('diagnosis[]', $row[0]) }}
                                                {{ Form::hidden('nilai[]', $row[1]) }}
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $row[0] }}</td>
                                                    <td>{{ $row[1] }}%</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
									</div>
                                </div>
								<h3> Hasil Diagnosis</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class='table-responsive'>
                                            <table class='table table-bordered cetak'>
                                                <tbody>
                                                    <tr>
                                                        <td width="130">Penyakit</td>
                                                        <td><strong>{{ $hasil_akhir[0][0] }}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penanganan</td>
                                                        <td class="text-justify">
                                                            {{ $hasil_akhir[0][2] }}
                                                            {{ Form::hidden('Penanganan', $hasil_akhir[0][2]) }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
									</div>
								</div>
                        	</div><br><br>
                                    <div class="box-footer">
                                        <div class="text-center col-sm-12">
                                            <a href="{{ url('diagnosa') }}" class="btn btn-primary">Ulangi Diagnosis</a>
                                            &nbsp;
                                            <button type="submit" class="btn btn-danger">Cetak PDF</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
<script>
    $(function () {
    $('#diagnosa').addClass('active');
    });
</script>


@endsection
