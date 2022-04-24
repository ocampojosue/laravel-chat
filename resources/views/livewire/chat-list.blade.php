<div>
   <h5>
      <strong>Lista de Mensajes</strong>
      @foreach ($mensajes as $mensaje)
          <li>{{$mensaje['usuario']}} - {{$mensaje['mensaje']}}</li>
      @endforeach
   </h5>
</div>