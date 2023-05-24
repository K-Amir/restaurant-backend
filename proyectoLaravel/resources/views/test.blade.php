@extends('layouts.app')


@section('content')
  <!-- {{-- ejemplo tarjeta --}}
  <div class="m-9 flex h-[230px] w-[500px] flex-row overflow-hidden rounded-[8px] bg-dark-3 text-light-2">
    {{-- img --}}
    <div class="flex flex-1 bg-dark-1">

    </div>
    {{-- contenido --}}
    <div class="flex flex-[2] flex-col px-3 py-2">
      {{-- titulo --}}
      <div class="flex gap-2">
        <p class="flex-1 text-action">Restaurante Bla bla bla</p>
        <span class="h-6 w-6 text-highlight-regular">
          icn
        </span>
      </div>
      <div class="flex flex-col">
        <p>pescados</p>
        <p>4.5</p>
        <p>35 $</p>
        <p>10 km</p>
      </div>
    </div>
  </div> -->
  <x-next-reservation>
    <x-slot name="slot1">
        1
    </x-slot>

    <x-slot name="slot2">
        Cayetano Ledesma
    </x-slot>

    <x-slot name="slot3">
        4 personas
    </x-slot>

    <x-slot name="slot4">
        19:00 h
    </x-slot>
  </x-next-reservation>

  <x-create-reservation>
  </x-create-reservation>

  <x-modal-accepted-reservation/>


  <x-modal-reject-reservation/>

  <!-- {{-- ejemplo alpine.js --}}
  <div x-data="{ number: 0 }" class="flex gap-5 bg-dark-3 p-5 text-light-2">
    <span x-text="number"></span>
    <button class="rounded-[12px] bg-highlight-regular px-[20px] py-[12px] text-action text-dark-2"
      @click="number++">Incrementar</button>
  </div> -->
@endsection
