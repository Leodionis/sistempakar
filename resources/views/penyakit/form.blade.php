{!! Form::model($model, [
'route' => ['penyakit.update', $model->id],
'method' => 'PUT',
'enctype' => 'multipart/form-data'
]) !!}

<div class="form-group">
    <label for="nama" class="control-label">Nama</label>
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}
</div>

<div class="form-group">
    <label for="keterangan" class="control-label">Keterangan</label>
    {!! Form::text('keterangan', null, ['class' => 'form-control', 'id' => 'keterangan']) !!}
</div> 

<div class="form-group">
    <label for="penanganan" class="control-label">Penanganan</label>
    {!! Form::text('penanganan', null, ['class' => 'form-control', 'id' => 'penanganan']) !!}
</div>

<div class="form-group">
    <label for="gambar" class="control-label">Gambar</label>
    {!! Form::file('gambar', ['class' => 'form-control', 'id' => 'gambar']) !!}
</div>

<!-- Menampilkan gambar saat ini -->
@if($model->gambar)
<div class="form-group">
    <label for="gambar" class="control-label">Gambar Saat Ini</label><br>
    <img src="{{ asset($model->gambar) }}" alt="gambar" style="max-width: 200px;">
</div>
@endif

{!! Form::close() !!}
