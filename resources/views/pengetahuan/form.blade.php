{!! Form::model($model, [
'route' => $model->exists ? ['pengetahuan.update', $model->id] : 'pengetahuan.store',
'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

<div class="form-group">
    <label class="control-label">Nama Penyakit</label>
    <select id="penyakit" name="penyakit" class="form-control">
        <option value="">Nama Penyakit</option>
        @foreach($penyakit as $penyakits)
        <option value="<?=$penyakits->id?>"
            @if ($penyakits->id == $model->id_penyakit)
                selected="selected"           
            @endif
            ><?= $penyakits->nama?></option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="nama" class="control-label">Nama Gejala</label>
    <select id="gejala" name="gejala" class="form-control">
        <option value="">Nama Gejala</option>
        @foreach($gejala as $gejalas)
        <option value="<?=$gejalas->id?>"
            @if ($gejalas->id == $model->id_gejala)
            selected="selected"                
            @endif
            ><?= $gejalas->nama?></option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="" class="control-label">Nilai MB</label>
    {!! Form::number('nilai_mb', null, [ 'min'=> '0', 'max' => '1',  'placeholder'=>'Masukkan Nilai','class' => 'form-control', 'id' => 'nilai_mb'])
    !!}
</div>

<div class="form-group">
    <label for="" class="control-label">Nilai MD</label>
    {!! Form::number('nilai_md', null, ['min'=> '0', 'max' => '1', 'placeholder'=>'Masukkan Nilai','class' => 'form-control', 'id' => 'nilai_md'])
    !!}
</div>

{!! Form::close() !!}
