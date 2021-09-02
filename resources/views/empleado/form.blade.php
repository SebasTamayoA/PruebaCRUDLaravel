<h1>{{$modo}} empleado</h1>


@if(count($errors)>0)
<ul>
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

    </div>
</ul>

@endif

<div class="form-gr">
    <label for="Nombre"> Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">

</div>

<div class="form-gr">
    <label for="Apellido"> Apellido</label>
    <input class="form-control" type="text" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}" id="Apellido">

</div>

<div class="form-gr">
    <label for="Correo"> Correo</label>
    <input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">

</div>

<div class="form-gr">
    <label for="Foto"> </label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
    @endif
    <input class="form-control" type="file" name="Foto" value="" id="Foto">

</div>

<br>
<input class="btn btn-success" type="submit" value="{{$modo}} datos">


<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>