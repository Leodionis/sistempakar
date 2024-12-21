{!! Form::model($model, [
   'route' => $model->exists ? ['admin.update', $model->id] : 'admin.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Name</label>
        {!! Form::text('nama', null, [ 'placeholder'=>'Masukkan Nama','class' => 'form-control', 'id' => 'nama']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">No Telepon</label>
        {!! Form::text('no_telepon', null, ['placeholder'=>'Masukkan no telepon','class' => 'form-control', 'id' => 'no_telepon']) !!}
    </div> 

    <div class="form-group">
        <label for="" class="control-label">E-Mail</label>
        {!! Form::email('email', null, ['placeholder'=>'Masukkan email','class' => 'form-control', 'id' => 'email']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Password</label>
        {!! Form::password('password', ['placeholder'=>'Masukkan password','class' => 'form-control', 'id' => 'password']) !!}
    </div>

{!! Form::close() !!}