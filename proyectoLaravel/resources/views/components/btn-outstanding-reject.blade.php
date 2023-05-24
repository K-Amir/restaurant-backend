<div x-data="{ modelOpen: false }" class="flex-1">

    <button {{ $attributes }} class="button-reject-reservation" @click="modelOpen =!modelOpen">
        Rechazar
    </button>

    <div x-show="modelOpen" class="absolute w-full bottom-0 right-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="bg-dark-3 ring-highlight-regular border-highlight-regular border-2 w-full rounded-[8px] mx-auto relative mh-fit ransition duration-150 ease-in-out">
            
            <div x-cloak class="inline-block w-full max-w-xl p-4 overflow-hidden text-left transition-all transform"
            >
                <div class="flex items-center justify-between space-x-4">
                    
                    <h6 class="text-lead-bold text-light-3 text-center mx-auto mb-5">¿Deseaa rechazar la reserva?</h6>

                </div>

                    <x-primary-button class="rounded-little" @click="modelOpen = false">Ahora no</x-primary-button>
                    <x-btn-reject-reservation @click="modelOpen =!modelOpen" class="w-full bg-highlight-dangerous text-center rounded-little py-2 mt-4"/>
            </div>
        </div>
    </div>
</div>
