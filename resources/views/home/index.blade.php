@extends('layouts.app')
@section('content')
    <div class="container">
      <h5 class="pb-0 mb-0"><strong>Live Chat with</strong></h5>
      <h2 class="pt-0 mt-0">Laravel + Livewire + Pusher</h2>
      @livewire('chat-form')
      @livewire('chat-list')
    </div>
@endsection