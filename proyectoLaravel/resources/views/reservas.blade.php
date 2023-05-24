{{-- @extends('layouts.navigation') --}}

@extends('layouts.panel')

@section('menu')
        
    <h2 class="text-light-3 text-heading-2">Panel de Administración</h2>

    <form method="POST" action="{{ route('logout') }}" class="">
        @csrf
        <x-primary-button class="">
            {{ __('Cerrar sesión') }}
        </x-primary-button>
    </form>


@endsection

@section('content')

   <h1 class="text-big-title">Reservas</h1>

@endsection