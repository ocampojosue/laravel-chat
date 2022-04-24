<div>
    <div class="form-group">
      <label for="">Nombre: </label>
      <input type="text" name="" id="" class="form-control" wire:model="nombre" placeholder="" aria-describedby="helpId">
      <small class="">{{$nombre}}</small>
    </div>
    <div class="form-group">
      <label for="">Mensaje: </label>
      <input type="text" name="" id="" class="form-control" wire:model="mensaje" placeholder="" aria-describedby="helpId">
      <small class="">{{$mensaje}}</small>
    </div>
    <button type="button" class="btn btn-success" wire:click="enviarMensaje">Enviar</button>

    {{-- Mensaje de Alerta --}}
    <div style="position: relative" class="alert alert-success collapse" role="alert" id="avisoSuccess">
      <script>
        // Recibir en JS el emit desde el componente
        // Evento mensajeEnviado
        window.livewire.on('mensajeEnviado', function(){
          // Mostra el aviso
          $('#avisoSuccess').fadeIn('slow');
          setTimeout(
            function(){
              $('#avisoSuccess').fadeOut('slow');
            },
            3000
          );
        });
      </script>
    </div>
</div>
