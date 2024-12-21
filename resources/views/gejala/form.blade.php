{!! Form::model($model, [
    'route' => $model->exists ? ['gejala.update', $model->id] : 'gejala.store',
    'method' => $model->exists ? 'PUT' : 'POST'
 ]) !!}
 
     <div class="form-group">
         <label for="" class="control-label">Nama</label>
         {!! Form::text('nama', null, [ 'placeholder'=>'Masukkan Nama','class' => 'form-control', 'id' => 'nama']) !!}
     </div>
 
     <div class="form-group">
         <label for="" class="control-label">Keterangan</label>
         {!! Form::text('keterangan', null, ['placeholder'=>'Masukkan keterangan','class' => 'form-control', 'id' => 'keterangan']) !!}
     </div> 
 
 {!! Form::close() !!}