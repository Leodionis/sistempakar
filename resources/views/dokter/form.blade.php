{!! Form::model($model, [
'route' => ['dokter.update', $model->id],
'method' => 'PUT',
'enctype' => 'multipart/form-data'
]) !!}
<!-- Nama -->
<div class="form-group">
    <label for="nama" class="control-label">Nama</label>
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}
</div>

<!-- Tempat Praktek -->
<div class="form-group">
    <label for="alamat" class="control-label">Tempat Praktek</label>
    {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
</div> 

<!-- No Telepon -->
<div class="form-group">
    <label for="no_telepon" class="control-label">No Telepon</label>
    {!! Form::text('no_telepon', null, ['class' => 'form-control', 'id' => 'no_telepon']) !!}
</div> 

<!-- Keterangan -->
<div class="form-group">
    <label for="keterangan" class="control-label"> Keterangan </label>
    {!! Form::text('keterangan', null, ['class' => 'form-control', 'id' => 'keterangan']) !!}
</div> 

<!-- Upload Gambar -->
<div class="form-group">
    <label for="gambar" class="control-label"> Upload Gambar</label>
    <input type="file" id="gambar" name="gambar" class="form-control">
</div> 

<!-- Tampilkan Gambar Saat Ini -->
@if($model->gambar)
<div class="form-group">
    <label for="gambar" class="control-label">Gambar Saat Ini</label><br>
    <img src="{{ asset($model->gambar) }}" alt="gambar" style="max-width: 200px;">
</div>
@endif

<!-- Tombol Submit -->
<button type="submit" class="btn btn-primary">Update</button>

{!! Form::close() !!}
