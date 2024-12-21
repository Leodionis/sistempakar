@extends('layouts2.master')

@section('content2')

<section class="content2">

  <div class="row text-center mb-2">
    <div class="col-sm-12 col-md-4">
    </div>
    <div class="col-sm-12 col-md-4">
      <img src="/assets/img/dokter2.png" width="150px" height="150px">
      <h3 class=" font-weight-bold mt-4"> SELAMAT DATANG </h3>
      <h3 class=" font-weight-bold"> Liceria </h3>

    </div>

    <div class="container mt-5">
  <!-- Sistem Pakar -->
  <div class="row">
    <div class="col-sm-12 col-md-8 offset-md-2">
      <p class="text-justify"><b>Sistem pakar kami</b> dirancang khusus untuk membantu diagnosis dini penyakit paru pada perokok pasif. Liceria memanfaatkan gejala yang Anda alami untuk memberikan prediksi dini serta informasi terkait penyakit tersebut.</p>
      <p class="text-justify">Kami menggunakan pendekatan <b>Certainty Factor</b>, sebuah metode perhitungan matematis untuk menganalisis gejala dan memberikan hasil diagnosis dengan tingkat kepastian tertentu. Silakan mulai diagnosis Anda dengan klik tombol di bawah ini.</p>
    </div>
  </div>

  <!-- Tombol Diagnosis -->
  <div class="row">
    <div class="col-sm-12 text-center">
      <a href="/diagnosa" class="btn btn-primary btn-lg mt-4">Mulai Diagnosis</a>
    </div>
  </div>
</div>

  </div>

</section><!-- #intro -->

<script>

$("#home").addClass("active");

// $(document).ready(function () {
// $(".read").click(function(){
//   $(this).prev().toggle();
// });
// });

// $(document).ready(function () {
// $('#readmore2').expander({
//             slicePoint: 30,
//             expandText: ' >',
//             userCollapseText: ' <<'
//         });
// });
</script>


@endsection