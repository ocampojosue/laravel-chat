<div>
    <div class="form-group">
      <label for="">Nombre: </label>
      <input type="text" class="form-control" wire:model="nombre">
      @error('nombre')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="">Mensaje: </label>
      <input type="text" class="form-control" wire:model="mensaje">
      @error('mensaje')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <button class="btn btn-success" wire:click="enviarMensaje">Enviar</button>

    {{-- Mensaje de Alerta --}}
    <div style="position: absolute; top:10px;right:10px;" class="alert alert-success collapse mt-3" role="alert" id="avisoSuccess">
      Se ha enviado
    </div>
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
