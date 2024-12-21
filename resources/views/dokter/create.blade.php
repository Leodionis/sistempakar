{!! Form::model($model, [
'route' => $model->exists ? ['dokter.update', $model->id] : 'dokter.store',
'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

<div class="form-group">
   <label for="" class="control-label">Nama</label>
   {!! Form::text('nama', null, [ 'placeholder'=>'Masukkan Nama','class' => 'form-control', 'id' => 'nama']) !!}
</div>

<div class="form-group">
    <label for="" class="control-label">Tempat Praktek</label>
    {!! Form::text('alamat', null, ['placeholder'=>'Masukkan Tempat Praktek','class' => 'form-control', 'id' => 'alamat']) !!}
</div> 

<div class="form-group">
   <label for="" class="control-label">No Telepon</label>
   {!! Form::text('no_telepon', null, ['placeholder'=>'Masukkan no telepon','class' => 'form-control', 'id' => 'no_telepon']) !!}
</div> 

<div class="form-group">
    <label for="" class="control-label"> Keterangan </label>
    {!! Form::text('keterangan', null, ['placeholder'=>'Masukkan keterangan jadwal','class' => 'form-control', 'id' => 'keterangan']) !!}
</div> 
<div class="form-group">
    <label for="gambar" class="control-label"> Upload Gambar</label>
    <input type="file" id="gambar" name="gambar" class="form-control" required style="height: auto;">
</div> 

{!! Form::close() !!}