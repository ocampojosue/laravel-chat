<div>
   <h5>
      <strong>Lista de Mensajes</strong>
      @foreach ($mensajes as $mensaje)
          <li>{{$mensaje['usuario']}} - {{$mensaje['mensaje']}}</li>
      @endforeach
   </h5>

   <script>
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('f0f6609eae19ee724c35', {
         cluster: 'us2'
      });

      var channel = pusher.subscribe('chat-channel');
      channel.bind('chat-event', function(data) {
         window.livewire.emit('mensajeRecibido', data);
      });
  </script>
</div>