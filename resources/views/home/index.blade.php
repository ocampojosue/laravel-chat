@extends('layouts.app')
@section('content')
    <div class="container mt-4">
      <div class="card">
        <div class="card-header text-center">
          <h2 class="card-title">Chat</h2>
        </div>
        <div class="card-body">
          @livewire('chat-form')
        </div>
      </div>
    </div>
@endsection