<div class="flex flex-col bg-dark-2 py-6 px-2">

    <div class="flex justify-between mb-6">
        <div>
            <svg width="24" height="58" viewBox="0 0 24 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 55.3032L4.46461 33.68C2.5118 31.1264 2.5118 26.9477 4.46461 24.394L21 2.77084" stroke="#F9F9F7" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div class="block">
            <p class="mb-2">{{$slot1}}</p>
            <p class="mb-2">{{$slot2}}</p>
            <p class="mb-2">{{$slot3}}</p>
        </div>

        <div>
            <svg width="24" height="59" viewBox="0 0 24 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.99998 3.22916L19.7535 24.3657C21.732 26.8619 21.7671 31.0279 19.8315 33.6236L3.44159 55.6023" stroke="#FFFFFD" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <div class="flex gap-2">
        <x-btn-outstanding-accept/>
        <x-btn-outstanding-reject/>
    </div>
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    new Swiper('#slider-container', {
        // Opciones de configuración de swiper.js
        // Por ejemplo, puedes habilitar la navegación con botones
        navigation: {
            prevEl: '.swiper-button-prev',
            nextEl: '.swiper-button-next',
        },
    });
});
</script>