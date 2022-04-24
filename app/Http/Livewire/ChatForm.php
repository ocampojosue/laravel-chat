<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $nombre, $mensaje;

    public function mount(){
        $this->nombre = "";
        $this->mensaje = "";
    }

    
    public function render()
    {
        return view('livewire.chat-form');
    }
    public function updated($field){
        $this->validateOnly($field, [
            'nombre' => 'required|min:3',
            'mensaje' => 'required|min:3'
        ],
            [
            'nombre.required' => 'El nombre es requerido',
            'nombre.min' => 'El nombre debe tener mínimo 3 carácteres',
            'mensaje.required' => 'El mensaje es requerido',
            'mensaje.min' => 'El mensaje debe tener mínimo 3 carácteres'
        ]);
    }
    public function enviarMensaje(){
        $this->validate([
            'nombre' => 'required|min:3',
            'mensaje' => 'required|min:3'
        ],
        [
            'nombre.required' => 'El nombre es requerido',
            'nombre.min' => 'El nombre debe tener mínimo 3 carácteres',
            'mensaje.required' => 'El mensaje es requerido',
            'mensaje.min' => 'El mensaje debe tener mínimo 3 carácteres'
        ]);
        $datos = [
            'usuario' => $this->nombre,
            'mensaje' => $this->mensaje
        ];
        $this->emit('mensajeEnviado');
        $this->emit('mensajeRecibido', $datos);
    }
}
