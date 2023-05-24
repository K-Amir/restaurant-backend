<div class="flex-1 p-4 pl-10">
    @foreach($rooms as $counter => $sala)
        <div class="sala flex flex-wrap justify-center" :class="{ 'active': activeBtn === {{$counter}}, 'inactive': activeBtn !== {{$counter}} }">
            @foreach($tables[$sala->id] as $mesa)
                <x-table status="{{$mesa->status}}">{{$mesa->id}}</x-table>
                {{-- <livewire:table :mesa="$mesa"/> --}}
            @endforeach
        </div>
    @endforeach
</div>