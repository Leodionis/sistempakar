<!-- resources/penyakit/create.blade.php -->
{!! Form::model($model, [
'route' => $model->exists ? ['penyakit.update', $model->id] : 'penyakit.store',
'method' => $model->exists ? 'PUT' : 'POST',
'enctype' => 'multipart/form-data'
]) !!}

<div class="form-group">
   <label for="" class="control-label">Nama</label>
   {!! Form::text('nama', null, [ 'placeholder'=>'Masukkan Nama','class' => 'form-control', 'id' => 'nama']) !!}
</div>

<div class="form-group">
   <label for="" class="control-label">Keterangan</label>
   {!! Form::text('keterangan', null, ['placeholder'=>'Masukkan keterangan','class' => 'form-control', 'id' => 'keterangan']) !!}
</div> 

<div class="form-group">
   <label for="" class="control-label">Penanganan</label>
   {!! Form::text('penanganan', null, ['placeholder'=>'Masukkan penanganan','class' => 'form-control', 'id' => 'penanganan']) !!}
</div>
<div class="form-group">
    <label for="gambar" class="control-label"> Upload Gambar</label>
    <input type="file" id="gambar" name="gambar" class="form-control"  style="height: auto;">
</div> 
{!! Form::close() !!}